<x-layouts.app>
    <x-slot:title>Добавление объявления</x-slot:title>

    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Товар</label>
            <input name="title" id="txtTitle" class="form-control" />
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control"
                row="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="txtPrice" class="form-label">Цена</label>
            <input name="price" id="txtPrice" class="form-control" />
        </div>
        <input type="submit" class="btn btn-primary" value="Добавить" />
    </form>
</x-layouts.app>