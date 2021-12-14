<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Sheet;

class SheetIndex extends Component
{
    public $category;
    public $search;

    protected $queryString = [
        'category',
        'search'
    ];

    public function mount()
    {
        $this->category = request()->category ?? 'All';
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.sheet-index', [
            'sheets'  => Sheet::latest()
                ->with('category')
                ->when($this->category && $this->category !== 'All', function($query) use ($categories){
                    return $query->where('category_id', $categories->pluck('id', 'name')
                    ->get($this->category));
                })
                ->when(strlen($this->search >= 3), function($query){
                    return $query->where('title', 'like', '%'.$this->search.'%');
                })
                ->get(),

            'categories' => $categories,
        ]
    );
    }
}
