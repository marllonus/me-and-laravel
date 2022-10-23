<?php

namespace App\Http\Livewire\CollectionsPage;

use Livewire\Component;

class CollectionSet extends Component
{
    public $collections = [];

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.collections-page.collection-set');
    }
}
