<?php

namespace App\Http\Livewire\SetBlock;


use Livewire\Component;
use App\Models\KnowledgeSet;

class NewSet extends Component
{
    public ?KnowledgeSet $set;

    protected $rules = [
        'set.title' => 'required|string',
    ];

    public function render()
    {
        return view('livewire.set-block.new-set');
    }

    public function create()
    {
        $this->set = KnowledgeSet::make();
    }

    public function store()
    {
        $this->validate();
        $this->set->save();
        //TODO emit?
        $this->set = null;
    }

    public function clear()
    {
        $this->set = null;
    }
}
