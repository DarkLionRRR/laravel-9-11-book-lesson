<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($title) ? $title . ' :: Объявления' : 'Объявления' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="/styles/main.css" />
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{ route('index') }}"
                    class="navbar-brand me-auto">Главная</a>
                <a href="{{ route('register') }}"
                    class="nav-item nav-link">Регистрация</a>
                <a href="{{ route('login') }}"
                    class="nav-item nav-link">Вход</a>
                <a href="{{ route('home') }}"
                    class="nav-item nav-link">Мои объявления</a>
                <form action="{{ route('logout') }}" method="POST"
                    class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger"
                        value="Выход">
                </form>
            </div>
        </nav>

        <h1 class="my-3 text-center">Объявления</h1>

        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>