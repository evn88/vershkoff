<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Фотограф Вершкова Анна</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="grid">
        <a href="/">
            <img src="http://vershkoff.ru/storage/cache/images/000/405/logo1,medium.1534409687.png" alt="Анна Вершкова" class="custom_logo">
        </a>
        <nav>
            <ul>
                <li><a title="Альбомы" href="/albums">Альбомы</a></li>
                <li><a title="Блог" href="/blog">Блог</a></li>
                <li><a title="Обо мне" href="/about">Обо мне</a></li>
            </ul>
        </nav>
    </header>
    <main class="grid">
        @yield('content')
    </main>
    <footer>
        <div class="wrapper">
           2018 © Anna Vershkova <br>
           Профессиональный фотограф Волгоград <br>
            <a href="/sendme">Написать мне</a>
        </div>
        <div class="bottom"></div>
    </footer>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>