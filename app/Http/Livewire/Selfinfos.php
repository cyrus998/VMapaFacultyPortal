<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Selfinfos extends Component
{
    use WithFileUploads;

    use WithPagination;
    public $term;

    public $showingPostModal = false;

    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise, $yeargraduated, $collegename, $teachercollegecourse;

    public $newImage;
    public $oldImage;

    public $isEditMode = false;
    public $selfinfo;

    public function render()
    {
        return view('livewire.portfolios.selfinfos', [
            'selfinfos' => User::all()
        ]);

        // return view('livewire.selfinfos.selfinfos', [
        //     'selfinfos' => User::when($this->term, function($query, $term){
        //         return $query->where('name', 'LIKE', "%$term%")
        //         ->orWhere('email', 'LIKE', "%$term%")
        //         ->orWhere('aboutme', 'LIKE', "%$term%")
        //         ->orWhere('address', 'LIKE', "%$term%")
        //         ->orWhere('contactnumber', 'LIKE', "%$term%")
        //         ->orWhere('subjectexpertise', 'LIKE', "%$term%");
        //     })->paginate(6)
        // ]);

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

        $image = $this->newImage->store('public/selfinfos');

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
    }

    public function showEditPostModal($id)
    {
        $this->selfinfo = User::findOrFail($id);

        $this->contactnumber = $this->selfinfo->contactnumber;
        $this->address = $this->selfinfo->address;
        $this->name = $this->selfinfo->name;
        $this->email = $this->selfinfo->email;
        $this->aboutme = $this->selfinfo->aboutme;
        $this->subjectexpertise = $this->selfinfo->subjectexpertise;
        $this->yeargraduated = $this->selfinfo->yeargraduated;
        $this->collegename = $this->selfinfo->collegename;
        $this->teachercollegecourse = $this->selfinfo->teachercollegecourse;

        $this->oldImage = $this->selfinfo->image;
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
        $image = $this->selfinfo->image;
        if ($this->newImage) {
            $image = $this->newImage->store('public/selfinfos');
        }

        $this->selfinfo->update([
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
    }
        //    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise;
    public function deletePost($id)
    {
        $selfinfo = User::findOrFail($id);
        Storage::delete($selfinfo->image);
        $selfinfo->delete();
        $this->reset();
    }

}
