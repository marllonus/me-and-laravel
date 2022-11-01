<?php

namespace App\Http\Livewire\CollectionsPage;

use Livewire\Component;
use App\Models\KnowledgeSet;

class CollectionList extends Component
{
    public $sets;

    protected $rules = [
        'sets.*.title' => 'required|string',
    ];

    public function mount()
    {
        $this->sets = KnowledgeSet::all();
    }

    public function addSet()
    {
        $this->sets->push(KnowledgeSet::make());
    }

    public function remove($index)
    {
        $this->sets->forget($index);//TODO it's not working properly into nested components
        //may be  becouse of caching?
        //in my  case  with  nested components data in input field all new models become empty when I interact with  collection
    }

    public function store($index)
    {
        $this->validate();//TODO I don't know how to validate one array item...
        $this->sets->get($index)->save();//TODO this is stupid: need split on  components
    }

    public function addCollection($index)
    {
        dd($index);
    }

    public function render()
    {
        return view('livewire.collections-page.collection-list');
    }
}
