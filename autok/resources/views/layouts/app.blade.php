<head>
    <!-- hmtl lang = app()->getlocalebol -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- kötelező, így nem annyira hekkelhető -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>

<body>
    <ul class="nav">
        <li>
            <a href="{{route('makers')}}">Gyártók</a>
        </li>
        <li>
            <a href="{{route(name: 'fuels')}}">Üzemanyagok</a>
        </li>
        <li class="dropdown">
            <a>Törzsadatok</a>
            <ul>
                <li><a href="{{route(name: 'bodies')}}" class="dd">Karosszériák</a></li>
                <li><a href="{{route(name: 'colors')}}" class="dd">Színek</a></li>
                <li><a href="{{route(name: 'gearshifts')}}" class="dd">Sebváltók</a></li>
            </ul>
            
        </li>
    </ul>
    <main>
        @yield('content')
    </main>

    <footer>
        <p>Készítette: Szabolics András :]</p>
        <p>Ez egy lábléc</p>
        <p>{{ config('app.name', 'Autok') }} v{{ config('app.version') }} (PHP v{{ PHP_VERSION }})</p>
    </footer>
</body>