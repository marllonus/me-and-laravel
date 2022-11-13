<div>
    <livewire:set-block.new-set>

    @foreach($sets as $set)
        <livewire:set-block.set-item :set="$set" :wire:key="$set->id">
        <br><hr>
    @endforeach
</div>
