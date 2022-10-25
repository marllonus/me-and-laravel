<div class="knowledge-collection__set">
    
    <hr><br>
    @if(isset($set->id))
    
        <h1 class="knowledge-collection__header">{{$set->title}}</h1>

        <button wire:click="addCollection">add collection</button>

        <div class="knowledge-collection__container">
            @if(false)
            @foreach($collections as $collection)
                @livewire('collections-page.collection-card')
            @endforeach
            @endif
        </div>
    @else
        <input type="text" wire:model="set.title">
        <button>save</button>
    @endif
</div>
