<div class="knowledge-collection">
    <button wire:click="addSet">add set</button>
    @foreach($sets as $key=>$set)
        @livewire('collections-page.collection-set', 
                            ['set' => $set], key($key))
    @endforeach

</div>
