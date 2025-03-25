<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300..600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__row">
                <ul class="header__menu menu">
                    <li class="menu__item"><a href="/" class="menu__link header__link">Главная</a></li>
                    <li class="menu__item"><a href="{{ route('ads.index') }}" class="menu__link header__link">Объявления</a></li>
                </ul>
                <a href="{{ route('ads.create') }}" class="header__create">
                    <img src="/img/plus.svg" alt="Плюс">
                </a>
                <ul class="header__menu menu">
                    @auth
                    <li class="menu__item"><a href="{{ route('profile') }}" class="menu__link header__link">Профиль</a></li>
                    <li class="menu__item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="button-unstyled menu__link header__link">Выйти</button>
                        </form>
                    </li>
                    @endauth

                    @guest
                    <li class="menu__item"><a href="{{ route('login') }}" class="menu__link header__link">Войти</a></li>
                    <li class="menu__item"><a href="{{ route('register') }}" class="menu__link header__link">Регистрация</a></li>
                    @endguest
                    
                </ul>
            </div>

        </div>
    </header>

    {{ $slot }}

    <footer class="footer">
        <div class="container">
            <div class="footer__info">
                Нереально крутые объявления 2025
            </div>
            <div class="footer__contact">

            </div>
        </div>
    </footer>

    <script src="/js/main.js"></script>
</body>