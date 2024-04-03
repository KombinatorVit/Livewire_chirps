<div>

    <input type="text" wire:model="newTodo">

    <button wire:click="addTodo" class=" text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out px-4 py-2">Add Todo</button>

    <ul>
        @if( count($todos))
            @foreach ($todos as $todo)
                <li>{{$todo}}</li>
            @endforeach

        @else
            <li>No todos</li>
        @endif
    </ul>

</div>
