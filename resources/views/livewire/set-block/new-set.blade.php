<div>
    @if(isset($set))
    <div>
        <input wire:model="set.title">
        @error('set.title') {{$message}} @enderror
        <button wire:click="store">save</button>
        <button wire:click="clear">clear</button>
    </div>
    @else
        <button wire:click="create">add set</button>
    @endif
</div>
