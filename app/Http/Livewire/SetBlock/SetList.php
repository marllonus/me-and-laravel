<?php

namespace App\Http\Livewire\SetBlock;


use Livewire\Component;
use App\Models\KnowledgeSet;

class SetList extends Component
{
    public $sets;

    protected $listeners = [
        'setStored' => 'addSet',
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
}
