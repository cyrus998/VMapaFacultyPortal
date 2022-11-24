<?php

namespace App\Http\Livewire;

use App\Models\PublicAnnouncement;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Publicannouncements extends Component
{
    use WithFileUploads;

    public $showingPostModal = false;

    public $title;
    public $setdate;
    public $newImage;
    public $description;
    public $linkurl;
    public $oldImage;
    public $isEditMode = false;
    public $publicannouncement;

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
            'description' => 'required',
            'linkurl' => 'required'
        ]);

        $image = $this->newImage->store('public/publicannouncements');

        PublicAnnouncement::create([
            'title' => $this->title,
            'setdate' => $this->setdate,
            'image' => $image,
            'description' => $this->description,
            'linkurl' => $this->linkurl,
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('announcementSaved');
    }

    public function showEditPostModal($id)
    {
        $this->publicannouncement = PublicAnnouncement::findOrFail($id);
        $this->title = $this->publicannouncement->title;
        $this->setdate = $this->publicannouncement->setdate;
        $this->description = $this->publicannouncement->description;
        $this->linkurl = $this->publicannouncement->linkurl;
        $this->oldImage = $this->publicannouncement->image;
        $this->isEditMode = true;
        $this->showingPostModal = true;
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required',
            'setdate' => 'required',
            'description' => 'required',
            'linkurl' => 'required'
        ]);
        $image = $this->publicannouncement->image;
        if ($this->newImage) {
            $image = $this->newImage->store('public/publicannouncements');
        }

        $this->publicannouncement->update([
            'title' => $this->title,
            'setdate' => $this->setdate,
            'image' => $image,
            'description' => $this->description,
            'linkurl' => $this->linkurl
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
        $publicannouncement = PublicAnnouncement::where('id', $this->delete_id)->first();
        Storage::delete($publicannouncement->image);
        $publicannouncement->delete();
        $this->reset();
        $this->dispatchBrowserEvent('infoDeleted');
    }

    public function render()
    {
        return view('livewire.publicannouncements', [
            'publicannouncements' => PublicAnnouncement::all()->sortByDesc('created_at')
        ]);
    }
}