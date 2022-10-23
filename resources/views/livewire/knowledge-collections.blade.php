<div class="knowledge-collection">
    <div class="knowledge-collection__set">
        <h1 class="knowledge-collection__header">a collection set</h1>
        <button wire:click="addCollection">add collection</button>
        <div class="knowledge-collection__container">
            @foreach($collections as $collection)
                <div class="knowledge-collection__card">
                    <h2>title here</h2>
                    <p>some description of a  card here</p>
                    <a href="#">link</a>
                </div>
            @endforeach
        </div>
    </div>
</div>
