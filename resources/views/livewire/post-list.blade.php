<div class="container mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold mb-4">Posts:</h2>

    <div class="-mx-4">
        <table class="w-full border-collapse">
            <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Content</th>
                <th class="px-4 py-2">Content2</th>
                <th class="px-4 py-2"> actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <livewire:post-row :key="$post->id" :$post />
            @endforeach
            </tbody>
        </table>
    </div>

</div>
