<x-layouts.app>
    <x-slot:title>Удалить объявление {{ $bb->title }}</x-slot:title>

    <h2>{{ $bb->title }}</h2>

    <p>{{ $bb->content }}</p>
    <p>Автор: {{ $bb->user->name }}</p>
    <p>{{ $bb->price }} руб.</p>
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}"
        method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить" />
    </form>
</x-layouts.app>