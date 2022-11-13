<?php

namespace App\Http\Livewire\SetBlock;

use Livewire\Component;
use App\Models\KnowledgeSet;

class SetItem extends Component
{
    public KnowledgeSet $set;
    public bool $isEditing = false;
    public bool $isDeleting =  false;

    protected $rules = [
        'set.title' => 'required|string',
    ];

    public function mount(KnowledgeSet $set)
    {
        $this->set = $set;
    }

    public function delete()
    {
        $this->isDeleting = true;
        $this->emit('deleteSetItem', $this->set->id);
    }

    public function render()
    {
        return view('livewire.set-block.set-item');
    }

    public function edit()
    {
        $this->isEditing = true;
    }

    public function cancel()
    {
        $this->isEditing = false;
        $this->set->refresh();
    }

    public function save()
    {
        $this->validate();
        $this->set->save();
        $this->set->refresh();
        $this->isEditing = false;
    }
}
