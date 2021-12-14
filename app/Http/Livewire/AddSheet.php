<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Sheet;
use Illuminate\Http\Response;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSheet extends Component
{
    use WithFileUploads;

    public $title;
    public $category = 1;
    public $description;
    public $thumbnail;

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer',
        'description' => 'required|min:4',
        'thumbnail' => 'image|max:1024'
    ];

    public function addSheet()
    {
        if(auth()->check()){
            $this->validate();
            Sheet::create([
                'user_id' => auth()->id(),
                'category_id' => $this->category,
                'title' => $this->title,
                'description' => $this->description,
                'thumbnail' => $this->thumbnail->store('thumbnails'),
            ]);

            session()->flash('success_message', 'Music sheet was added successfully.');

            $this->reset();
            return redirect()->back();
        }

        abort(Response::HTTP_FORBIDDEN);
    }

    public function render()
    {
        return view('livewire.add-sheet', [
            'categories' => Category::all()
        ]);
    }
}
