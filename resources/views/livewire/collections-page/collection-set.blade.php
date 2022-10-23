<div class="knowledge-collection__set">
    <h1 class="knowledge-collection__header">a collection set</h1>
    <button wire:click="addCollection">add collection</button>
    <div class="knowledge-collection__container">
        @foreach($collections as $collection)
            @livewire('collections-page.collection-card')
        @endforeach
    </div>
</div>
