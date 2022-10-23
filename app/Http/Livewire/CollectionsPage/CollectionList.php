<?php

namespace App\Http\Livewire\CollectionsPage;

use Livewire\Component;

class CollectionList extends Component
{
    public $sets;

    public function mount()
    {
        $this->sets = [];
    }

    public function addSet()
    {
       $this->sets[] = (object)[]; 
    }

    public function render()
    {
        return view('livewire.collections-page.collection-list');
    }
}
