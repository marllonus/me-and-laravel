<?php

namespace App\Http\Livewire\SetBlock;

use Livewire\Component;
use App\Models\KnowledgeSet;

class SetList extends Component
{
    public $sets;

    public function mount()
    {
        $this->sets = KnowledgeSet::all();
    }

    public function render()
    {
        return view('livewire.set-block.set-list');
    }
}
