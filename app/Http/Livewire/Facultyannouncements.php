<?php

namespace App\Http\Livewire;

use App\Models\Facultyannouncement;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Facultyannouncements extends Component
{
    use WithFileUploads;

    public $showingPostModal = false;

    public $title;
    public $setdate;
    public $newImage;
    public $description;
    public $oldImage;
    public $linkurl;
    public $isEditMode = false;
    public $facultyannouncement;

    public function showPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }


    public function storePost()
    {
        $this->validate([
            'newImage' => 'image|max:4096', // 1MB Max
            'title' => 'required',
            'setdate' => 'required',
            'linkurl' => 'required',
            'description' => 'required'
        ]);

        $image = $this->newImage->store('public/facultyannouncements');

        Facultyannouncement::create([
            'title' => $this->title,
            'setdate' => $this->setdate,
            'linkurl' => $this->linkurl,
            'image' => $image,
            'description' => $this->description,
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('announcementSaved');
    }

    public function showEditPostModal($id)
    {
        $this->facultyannouncement = Facultyannouncement::findOrFail($id);
        $this->title = $this->facultyannouncement->title;
        $this->setdate = $this->facultyannouncement->setdate;
        $this->description = $this->facultyannouncement->description;
        $this->linkurl = $this->facultyannouncement->linkurl;
        $this->oldImage = $this->facultyannouncement->image;
        $this->isEditMode = true;
        $this->showingPostModal = true;
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required',
            'setdate' => 'required',
            'linkurl' => 'required',
            'description' => 'required'
        ]);
        $image = $this->facultyannouncement->image;
        if ($this->newImage) {
            $image = $this->newImage->store('public/facultyannouncements');
        }

        $this->facultyannouncement->update([
            'title' => $this->title,
            'setdate' => $this->setdate,
            'linkurl' => $this->linkurl,
            'image' => $image,
            'description' => $this->description
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('announcementSaved');
    }


    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deletePost'];

    public function deleteConfirmation($id){

        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');

    }

    public function deletePost()
    {
        $facultyannouncement = Facultyannouncement::where('id', $this->delete_id)->first();
        Storage::delete($facultyannouncement->image);
        $facultyannouncement->delete();
        $this->reset();
        $this->dispatchBrowserEvent('infoDeleted');
    }

    public function render()
    {
        return view('livewire.facultyannouncements', [
            'facultyannouncements' => Facultyannouncement::all()->sortByDesc('created_at')
        ]);
    }
}