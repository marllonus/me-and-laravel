<div class="knowledge-collection">
    <button wire:click="addSet">add set</button>
    @foreach($sets as $set)
        @livewire('collections-page.collection-set')
    @endforeach

</div>
