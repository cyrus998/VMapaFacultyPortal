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
    public $newImage;
    public $description;
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
            'description' => 'required'
        ]);

        $image = $this->newImage->store('public/publicannouncements');

        PublicAnnouncement::create([
            'title' => $this->title,
            'image' => $image,
            'description' => $this->description,
        ]);
        $this->reset();
    }

    public function showEditPostModal($id)
    {
        $this->publicannouncement = PublicAnnouncement::findOrFail($id);
        $this->title = $this->publicannouncement->title;
        $this->description = $this->publicannouncement->description;
        $this->oldImage = $this->publicannouncement->image;
        $this->isEditMode = true;
        $this->showingPostModal = true;
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $image = $this->publicannouncement->image;
        if ($this->newImage) {
            $image = $this->newImage->store('public/publicannouncements');
        }

        $this->publicannouncement->update([
            'title' => $this->title,
            'image' => $image,
            'description' => $this->description
        ]);
        $this->reset();
    }

    public function deletePost($id)
    {
        $publicannouncement = PublicAnnouncement::findOrFail($id);
        Storage::delete($publicannouncement->image);
        $publicannouncement->delete();
        $this->reset();
    }

    public function render()
    {
        return view('livewire.publicannouncements', [
            'publicannouncements' => PublicAnnouncement::all()
        ]);
    }
}