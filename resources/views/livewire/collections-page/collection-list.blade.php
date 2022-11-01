<div class="knowledge-collection">
    <button wire:click="addSet">add set</button>

    @foreach($sets as $key=>$set)
        <div class="knowledge-collection__set">
    
        <hr><br>
        @if(isset($set->id))
    
            <h1 class="knowledge-collection__header">{{$set->title}}</h1>

            <button wire:click="addCollection({{$key}})">add collection</button>

            <div class="knowledge-collection__container">
            @if(false)
            @foreach($collections as $collection)
                @livewire('collections-page.collection-card')
            @endforeach
            @endif
            </div>
        @else
            <input type="text" wire:model="sets.{{$key}}.title">
            @error("sets.$key.title") fill it please @enderror
            <button wire:click="store({{$key}})">save</button>
            <button wire:click="remove({{$key}})">remove</button>
        @endif
        </div>
    @endforeach
</div>
