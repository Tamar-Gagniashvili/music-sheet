<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Sheet;
use Illuminate\Http\Response;
use Livewire\Component;

class AddSheet extends Component
{
    public $title;
    public $category = 1;
    public $description;

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer',
        'description' => 'required|min:4',
    ];

    public function addSheet()
    {
        if(auth()->check()){
            $this->validate();
            Sheet::create([
                'user_id' => auth()->id(),
                'catefory_id' => $this->category,
                'title' => $this->title,
                'description' =>$this->description
            ]);

            session()->flash('success_message', 'Music sheet was added successfully.');

            $this->reset();
            return redirect()->route('sheet.index');
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
