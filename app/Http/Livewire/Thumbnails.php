<?php

namespace App\Http\Livewire;

use App\Models\Thumbnail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Thumbnails extends Component
{
    use WithFileUploads;

    public $thumbnails= [];

    
    public function storeThumbnails()
    {
        $this->validate([
            'thumbnails.*' => 'required|image',
        ]);
        foreach($this->thumbnails as $key=>$thumbnail){
            $this->thumbnails[$key] = $thumbnail->store('thumbnails');
            $this->thumbnails = json_encode($this->thumbnails);
            Thumbnail::create([
                'filename' => $this->thumbnails,
            ]);
            session()->flash('success_message', 'Image Uploaded Successfully');
        }
    }
    public function render()
    {
        return view('livewire.thumbnails');
    }
}
