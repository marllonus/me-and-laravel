<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KnowledgeCollections extends Component
{
    public $collections;

    public function mount()
    {
        $this->collections = [];
    }

    public function addCollection()
    {
       $this->collections[] = (object)[]; 
    }

    public function render()
    {
        return view('livewire.knowledge-collections');
    }
}
