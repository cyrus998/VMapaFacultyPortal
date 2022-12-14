<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Portfolios extends Component
{
    use WithFileUploads;

    use WithPagination;
    public $term;

    public $showingPostModal = false;

    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise, $yeargraduated, $collegename, $teachercollegecourse;

    public $newImage;
    public $oldImage;

    public $isEditMode = false;
    public $portfolio;


    public function render()
    {
        // return view('livewire.portfolios.portfolios', [
        //     'portfolios' => User::all()
        // ]);

        return view('livewire.portfolios.portfolios', [
            'portfolios' => User::when($this->term, function($query, $term){
                return $query->where('name', 'LIKE', "%$term%")
                ->orWhere('email', 'LIKE', "%$term%")
                ->orWhere('aboutme', 'LIKE', "%$term%")
                ->orWhere('address', 'LIKE', "%$term%")
                ->orWhere('contactnumber', 'LIKE', "%$term%")
                ->orWhere('subjectexpertise', 'LIKE', "%$term%")
                ->orWhere('yeargraduated', 'LIKE', "%$term%")
                ->orWhere('collegename', 'LIKE', "%$term%")
                ->orWhere('teachercollegecourse', 'LIKE', "%$term%");

            })->where('position','teacher')->paginate(6)
        ]);

    }
 
    public function showPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }


    public function storePost()
    {
        $this->validate([
            'newImage' => 'image|mimes:jpeg,png,jpg,svg|max:1024', // 1MB Max
            'contactnumber' => 'required',
            'address' => 'required',
            'name' => 'required',
            'email' => 'required',
            'aboutme' => 'required',
            'subjectexpertise' => 'required',
            'yeargraduated' => 'required',
            'collegename' => 'required',
            'teachercollegecourse' => 'required'
        ]);

        $image = $this->newImage->store('public/portfolios');


        User::create([
            'image' => $image,
            'contactnumber' => $this->contactnumber,
            'address' => $this->address,
            'name' => $this->name,
            'email' => $this->email,
            'aboutme' => $this->aboutme,
            'subjectexpertise' => $this->subjectexpertise,
            'yeargraduated' => $this->yeargraduated,
            'collegename' => $this->collegename,
            'teachercollegecourse' => $this->teachercollegecourse,
        ]);
        $this->reset();

        $dt = Carbon::now();
        $datetime= $dt->toDayDateTimeString();
        $activitylog = [

            'action' => 'Created a new Portfolio',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'role' => Auth::user()->role,
            'date_time' => $datetime,
        ];
        DB::table('logs')->insert($activitylog);

        
    }

    public function showEditPostModal($id)
    {
        $this->portfolio = User::findOrFail($id);

        $this->contactnumber = $this->portfolio->contactnumber;
        $this->address = $this->portfolio->address;
        $this->name = $this->portfolio->name;
        $this->email = $this->portfolio->email;
        $this->aboutme = $this->portfolio->aboutme;
        $this->subjectexpertise = $this->portfolio->subjectexpertise;
        $this->yeargraduated = $this->portfolio->yeargraduated;
        $this->collegename = $this->portfolio->collegename;
        $this->teachercollegecourse = $this->portfolio->teachercollegecourse;

        $this->oldImage = $this->portfolio->image;
        $this->isEditMode = true;
        $this->showingPostModal = true;
    }

    public function updatePost()
    {
        $this->validate([
            'contactnumber' => 'required',
            'address' => 'required',
            // 'newImage' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'name' => 'required',
            'email' => 'required',
            'aboutme' => 'required',
            'subjectexpertise' => 'required',
            'yeargraduated' => 'required',
            'collegename' => 'required',
            'teachercollegecourse' => 'required'
        ]);
        $image = $this->portfolio->image;
        if ($this->newImage) {
            $image = $this->newImage->store('public/portfolios');
        }

        $this->portfolio->update([
            'image' => $image,
            'contactnumber' => $this->contactnumber,
            'address' => $this->address,
            'name' => $this->name,
            'email' => $this->email,
            'aboutme' => $this->aboutme,
            'subjectexpertise' => $this->subjectexpertise,
            'yeargraduated' => $this->yeargraduated,
            'collegename' => $this->collegename,
            'teachercollegecourse' => $this->teachercollegecourse
        ]);
        $this->reset();

        $this->dispatchBrowserEvent('infoSaved');

        $dt = Carbon::now();
        $datetime= $dt->toDayDateTimeString();
        $activitylog = [

            'action' => 'Edited a Portfolio',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'role' => Auth::user()->role,
            'date_time' => $datetime,
        ];
        DB::table('logs')->insert($activitylog);


    }
        //    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise;
    public function deletePost($id)
    {
        $portfolio = User::findOrFail($id);
        Storage::delete($portfolio->image);
        $portfolio->delete();
        $this->reset();

        
        $dt = Carbon::now();
        $datetime= $dt->toDayDateTimeString();
        $activitylog = [

            'action' => 'Deleted a Portfolio',
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'facultyNumber' => Auth::user()->facultyNumber,
            'position' => Auth::user()->position,
            'role' => Auth::user()->role,
            'date_time' => $datetime,
        ];
        DB::table('logs')->insert($activitylog);


    }

    
}
