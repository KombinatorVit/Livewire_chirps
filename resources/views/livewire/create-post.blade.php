<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-6 bg-gray-100 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">New Posts:</h2>

        <div>
            Current Title is: <span x-text="$wire.title"></span>

            <button class="ml-2 text-blue-900 bg-blue-200 rounded p-1 " x-on:click="$wire.title = ''">Clear title</button>
        </div>

        <form wire:submit="save">
            <div class="mb-4">
                <label for="title" class="block mb-1">Title</label>
                <input id="title" type="text"
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                       placeholder="Enter title" wire:model="title">
                @error('title')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="body" class="block mb-1">Body</label>
                <textarea id="body" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"
                          placeholder="Enter body" wire:model="body"></textarea>
                <small> Characters: <span x-text="$wire.body.length"></span></small>
                @error('body')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>


            <button type="submit"
                    class="w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Save
            </button>
        </form>
    </div>
</div>
