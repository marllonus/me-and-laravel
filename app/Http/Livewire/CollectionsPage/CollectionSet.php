<?php

namespace App\Http\Livewire\CollectionsPage;


use Livewire\Component;
use App\Models\KnowledgeSet;

class CollectionSet extends Component
{
    public KnowledgeSet $set;
    
    protected $rules = [
        'set.title' => 'required|string',
    ];

    public function store()
    {
        $this->set->save();
    }

    public function remove($key)
    {
        $this->emit('removeSet', $key);
    }

    public function render()
    {
        return view('livewire.collections-page.collection-set');
    }
}
