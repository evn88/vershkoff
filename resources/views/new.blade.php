<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> -->
    <title>Фотограф Вершкова Анна</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <header class="grid">
        <!-- <div></div> -->
        <!-- <div> -->
        <img src="http://vershkoff.ru/storage/cache/images/000/405/logo1,medium.1534409687.png" alt="Анна Вершкова" class="custom_logo">
        <nav>
            <ul>
                <li>
                    <a title="Альбомы" href="/">Альбомы</a>
                </li>
                <li>
                    <a title="Блог" href="/blog">Блог</a>
                </li>
                <li>
                    <a title="Обо мне" href="/about">Обо мне</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="grid">
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/607/IMG-5553,300.225.85.60.crop.2x.1534768508.JPG">    
            <span>Название альбома 1 Очень длинное название альбома которого не существует. А еще может быть во всем этом виноват котик? Может быть это он все сломал?</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="Черногория">   
            <span>Черногория</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/052/IMG-7037veb,300.225.85.60.crop.2x.1534586460.jpg" alt="Черногория">   
            <span>Наталья с Варенькой и Зоей</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/579/IMG-7573,300.225.85.60.crop.2x.1534757406.JPG">    
            <!-- <span>Название альбома 4</span> -->
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/490/IMG-9956,300.225.85.60.crop.2x.1534586460.JPG">   
            <span>Семья Вершковых</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/711/IMG-3832veb,420.315.85.60.crop.2x.1538217843.jpg">    
            <span>Название альбома 6</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="Черногория">   
            <span>Название альбома 1</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/607/IMG-5553,300.225.85.60.crop.2x.1534768508.JPG" alt="Черногория">    
            <span>Название альбома 1</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="Черногория">   
            <span>Название альбома 1</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/607/IMG-5553,300.225.85.60.crop.2x.1534768508.JPG" alt="Черногория">    
            <span>Название альбома 1</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="Черногория">   
            <span>Название альбома 1</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="Черногория" width="300" height="225" style="opacity: 1;">   
            <span>Название альбома 1</span>
        </a>
        <a href="#">
            <img src="http://vershkoff.ru/storage/cache/images/000/754/IMG-6998v,300.225.85.60.crop.2x.1539160432.jpg" alt="Черногория" width="300" height="225" style="opacity: 1;">   
            <span>Название альбома 1</span>
        </a>
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