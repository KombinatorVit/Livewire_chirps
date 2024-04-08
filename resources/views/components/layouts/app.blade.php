<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')


</head>
<body>

<nav class="flex items-center justify-center bg-gray-800 py-4">
    <a wire:navigate     href="{{ route('todos') }}" @class(['bg-blue-500' => request()->is('todos'), 'text-white text-lg px-4 py-2 mx-2 rounded'])>Todos</a>

    <a  wire:navigate  href="{{ route('counter') }}"
        @class(['bg-blue-500' => request()->is('counter'), 'text-white text-lg px-4 py-2 mx-2 rounded'])
    >Counter</a>
    <a  wire:navigate  href="{{ route('posts.index') }}"
        @class(['bg-blue-500' => request()->is('posts'), 'text-white text-lg px-4 py-2 mx-2 rounded'])
    >Posts</a>
</nav>

{{ $slot }}


</body>
</html>
