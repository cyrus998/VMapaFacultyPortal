<?php

namespace App\Http\Livewire;

use App\Models\User;
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

    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise;

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
                ->orWhere('subjectexpertise', 'LIKE', "%$term%");
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
            'subjectexpertise' => 'required'
        ]);

        $image = $this->newImage->store('public/portfolios');

        User::create([
            'image' => $image,
            'contactnumber' => $this->title,
            'address' => $this->body,
            'name' => $this->title,
            'email' => $this->body,
            'aboutme' => $this->title,
            'subjectexpertise' => $this->body,
        ]);
        $this->reset();
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
            'subjectexpertise' => 'required'
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
            'subjectexpertise' => $this->subjectexpertise
        ]);
        $this->reset();

        $this->dispatchBrowserEvent('infoSaved');
    }
        //    public $contactnumber, $address, $name, $email, $aboutme, $subjectexpertise;
    public function deletePost($id)
    {
        $portfolio = User::findOrFail($id);
        Storage::delete($portfolio->image);
        $portfolio->delete();
        $this->reset();
    }

    
}
