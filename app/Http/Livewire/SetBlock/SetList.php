<?php

namespace App\Http\Livewire\SetBlock;


use Livewire\Component;
use App\Models\KnowledgeSet;

class SetList extends Component
{
    public $sets;

    protected $listeners = [
        'setStored' => 'addSet',
        'deleteSetItem' => 'deleteSet',
    ];

    public function mount()
    {
        $this->sets = KnowledgeSet::all();
    }

    public function render()
    {
        return view('livewire.set-block.set-list');
    }

    public function addSet(KnowledgeSet $set)
    {
        $this->sets->push($set);
    }

    public function deleteSet(int $set_id)
    {
        $key = $this->sets->search(fn($it)=>$it->id === $set_id);
        $this->sets->pull($key)->delete();
    }
}
