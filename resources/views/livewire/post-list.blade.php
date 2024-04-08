<div>
    {{-- The whole world belongs to you. --}}


    @foreach ($posts as $post)
        <div>
            {{ $post->title }}
        </div>
    @endforeach
</div>
