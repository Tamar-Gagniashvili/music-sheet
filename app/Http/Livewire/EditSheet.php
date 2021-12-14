<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Sheet;
use Livewire\Component;

class EditSheet extends Component
{
    public function render()
    {
        return view('livewire.edit-sheet', [
            'sheets' => Sheet::all(),
            'categories' => Category::all(),
        ]);
    }
}
