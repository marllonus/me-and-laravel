<div>
        @if($isEditing)
            <input type="text" wire:model="set.title">
            @error('set.title') {{$message}} @enderror
        @else
            <p>{{$set->title}}</p>
        @endif

        @if(!$isEditing && !$isDeleting)
            <button wire:click="edit">edit</button>
            <button wire:click="delete">delete</button>
        @elseif(!$isDeleting)
            <button wire:click="save">save</button>
            <button wire:click="cancel">cancel</button>
        @endif
</div>
