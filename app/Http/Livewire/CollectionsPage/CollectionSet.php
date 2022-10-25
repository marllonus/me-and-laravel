<?php

namespace App\Http\Livewire\CollectionsPage;


use Livewire\Component;
use App\Models\KnowledgeSet;

class CollectionSet extends Component
{
    public KnowledgeSet $set;

    public function mount(?KnowledgeSet $set = null)
    {
        $this->set = $set ?? new KnowledgeSet;
    }

    public function render()
    {
        return view('livewire.collections-page.collection-set');
    }
}
