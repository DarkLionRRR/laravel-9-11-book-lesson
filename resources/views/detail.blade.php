<x-layouts.app>
    <x-slot:title>{{ $bb->title }}</x-slot:title>

    <h2>{{ $bb->title }}</h2>

    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }} руб.</p>
    <p><a href="{{ route('index') }}">На перечень объявлений</a></p>
</x-layouts.app>