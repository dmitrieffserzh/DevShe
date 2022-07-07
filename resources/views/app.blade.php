<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</head>
<body>
<header class="header">
    <div class="header__container">
        <div class="header-top">
            <div class="header-top__menu">
                <a href="{{ route('catalog.elite') }}"{{ (request()->is('elite')) ? 'class=active' : '' }}>Элитные</a>
                <a href="{{ route('catalog.individuals') }}"{{ (request()->is('individuals')) ? 'class=active' : '' }}>Индивидуалки</a>
                <a href="{{ route('catalog.cheap') }}"{{ (request()->is('cheap')) ? 'class=active' : '' }}>Дешевые</a>
                <a href="{{ route('catalog.bdsm') }}"{{ (request()->is('bdsm')) ? 'class=active' : '' }}>БДСМ</a>
                <a href="{{ route('catalog.masseuses') }}"{{ (request()->is('masseuses')) ? 'class=active' : '' }}>Массажистки</a>
            </div>
            <div class="header-top__social">
                <a href="" class="ws"></a>
                <a href="" class="tg"></a>
            </div>
        </div>
    </div>
    <div class="header__container">
        <div class="header-main">
            <a href="{{ route('main') }}" class="header-main__logo">
                <img src="/images/logo_dark.png" alt="">
            </a>
            <div class="header-main__search">
                <div class="header-search">
                    <input type="text" name="search" placeholder="Имя или id"
                           class="header-search__input" autocomplete="off">
                    <button class="header-search__button"></button>
                    <div class="header-search__result"></div>
                </div>
                <a href="{{ route('search.metro') }}" class="header-search__link"><soan class="text">Поиск по </soan><span></span></a>
            </div>
            <div class="header-main__buttons">
                @if (!Auth::check())
                <a href="" class="button button--add js-open-modal"
                   data-modal="register"><span class="icon"></span><span class="text">Добавить анкету</span></a>
                @endif
                @if (Auth::check())
                    <a href="{{ route('profile.index') }}" class="button button--login"><span class="icon"></span><span class="text">Личный кабинет</span></a>
                    @elseif(!Auth::check())
                    <a href="" class="button button--login js-open-modal"
                       data-modal="login"><span class="icon"></span><span class="text">Войти в кабинет</span></a>
                @endif
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="main__container">
        @if (Request::path() == '/' && $slides)
            @include('components.main.main-slider',['slides' => $slides])
        @endif
        @hasSection('h1')
            <div class="main__heading">
            <h1 class="main__h1">@yield('h1')</h1>@yield('profile-meta')
            </div>
        @endif
    </div>

    @if(isset($eliteGirls))
        @include('components.main.list_profiles', ['title'=> 'Элитные девушки', 'items' => $eliteGirls, 'link' => route('catalog.elite')])
    @endif

    @if(isset($newGirls))
        @include('components.main.slider_profiles', ['id'=> 'new-girls', 'title'=> 'Новые девушки', 'items' => $newGirls])
    @endif

    @if(isset($individualGirls))
        @include('components.main.list_profiles', ['title'=> 'Индивидуалки', 'items' => $individualGirls, 'link' => route('catalog.individuals')])
    @endif

    @if(isset($topGirls))
        @include('components.main.slider_profiles', ['id'=> 'top-girls', 'title'=> 'Девушки ТОП-100', 'items' => $topGirls])
    @endif

    @if(isset($cheapGirls))
        @include('components.main.list_profiles', ['title'=> 'Дешевые девушки', 'items' => $cheapGirls, 'link' => route('catalog.cheap')])
    @endif

    @if(isset($masseusesGirls))
        @include('components.main.list_profiles', ['title'=> 'Массажистки', 'items' => $masseusesGirls, 'link' => route('catalog.masseuses')])
    @endif

{{--    <div class="main__container {{ Request::segment(1) == 'profile' ? 'main__container--with-aside' : ''}}">--}}
    <div class="main__container">
        @yield('content')
    </div>
</main>
<footer class="footer">
    <div class="footer__container">
        <div class="footer-links">
            <a href="/" class="footer-links__logo">
                <img src="/images/logo_dark.png" alt="">
            </a>
            <div class="footer-links__menu">
                <a href="{{ route('catalog.elite') }}"{{ (request()->is('elite')) ? 'class=active' : '' }}>Элитные</a>
                <a href="{{ route('catalog.individuals') }}"{{ (request()->is('individuals')) ? 'class=active' : '' }}>Индивидуалки</a>
                <a href="{{ route('catalog.cheap') }}"{{ (request()->is('cheap')) ? 'class=active' : '' }}>Дешевые</a>
                <a href="{{ route('catalog.bdsm') }}"{{ (request()->is('bdsm')) ? 'class=active' : '' }}>БДСМ</a>
                <a href="{{ route('catalog.masseuses') }}"{{ (request()->is('masseuses')) ? 'class=active' : '' }}>Массажистки</a>
            </div>
            <div class="footer-links__social">
                <a href="" class="ws"></a>
                <a href="" class="tg"></a>
            </div>
        </div>
        <div class="footer-offer">
            Вся представленная информация, касающаяся анкет и объявлений проституток, носит информационный характер и ни
            при каких условиях не является публичной офертой, определяемой положениями Статьи 437(2) Гражданского
            кодекса РФ.<br>
            Услуги в сфере знакомств. Строго от 18 лет. Все объявления размещены с согласия владельца и являются частной
            информацией.
        </div>
    </div>
    <div class="copyright">
        <div class="copyright__container">
            <div class="copyright-text">2022 &copy; Все права защищены</div>
            <div class="copyright-links">
                <a href="{{ route('post.index') }}">Статьи</a>
                <a href="{{ route('page', ['slug' => 'privacy-policy']) }}">Политика конфиденциальности</a>
                <a href="{{ route('page', ['slug' => 'user-agreement']) }}">Пользовательское соглашение</a>
            </div>
        </div>
    </div>
</footer>

@if (!Auth::check())
    @include('auth.register')
    @include('auth.login')
@endif

<div class="modal" data-modal="add-testimonial">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
                d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
                fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Оставить отзыв</p>
    <p class="modal__subtitle"></p>
    <textarea name="" id="" cols="30" rows="10"></textarea>
</div>


<div class="overlay" id="overlay-modal"></div>
<script>
    const sections = {!! json_encode(\App\Helpers::getGirlSectionUrl()) !!};
</script>
</body>
</html>
