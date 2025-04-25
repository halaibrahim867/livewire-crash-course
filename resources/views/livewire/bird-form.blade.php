<div>
    <form wire:submit="submit">
        <div>
            <label for="bird_count">Bird Count</label>
            <input wire:model="bird_count" type="number"/>
        </div>
        <div>
            <label for="notes">Notes</label>
            <textarea  wire:model="notes"></textarea>

        </div>
        <button>Add a New Bird Count </button>
    </form>

    <div>
        @foreach($entries as $entry)
            <div>
                {{$entry->bird_count}}
            </div>
            <div>
                {{$entry->notes}}
            </div>
        @endforeach
    </div>

</div>
