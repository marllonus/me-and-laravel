<div>
    <livewire:set-block.new-set>

    @foreach($sets as $set)
        <p>{{$set->title}}</p>
    @endforeach
</div>
