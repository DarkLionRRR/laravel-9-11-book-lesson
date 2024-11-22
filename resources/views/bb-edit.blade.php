<x-layouts.app>
    <x-slot:title>Правка объявления</x-slot:title>

    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Товар</label>
            <input name="title" id="txtTitle" class="form-control" value="{{ $bb->title }}" />
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control"
                row="3">{{ $bb->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="txtPrice" class="form-label">Цена</label>
            <input name="price" id="txtPrice" class="form-control" value="{{ $bb->price }}" />
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить" />
    </form>
</x-layouts.app>