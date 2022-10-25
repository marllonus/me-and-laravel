<?php

namespace App\Http\Livewire\CollectionsPage;

use Livewire\Component;
use App\Models\KnowledgeSet;

class CollectionList extends Component
{
    public $sets;

    public function mount()
    {
        $this->sets = KnowledgeSet::all();
    }

    public function addSet()
    {
       $this->sets->push(new KnowledgeSet);
    }

    public function render()
    {
        return view('livewire.collections-page.collection-list');
    }
}
