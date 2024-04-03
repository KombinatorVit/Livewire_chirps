<div>


    {{$count}}
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>

    <button wire:click="increment(2)">+</button>

    <button wire:click="decrement">-</button>

    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>

        <span x-text="count"></span>
    </div>
</div>
