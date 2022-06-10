<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</head>
<body>
<header class="header">
    <div class="header__container">
        <div class="header-top">
            <div class="header-top__menu">
                <a href="#">Элитные</a>
                <a href="#">Индивидуалки</a>
                <a href="#">Дешевые</a>
                <a href="#">БДСМ</a>
                <a href="#">Массажистки</a>
            </div>
            <div class="header-top__social">
                <a href="" class="ws"></a>
                <a href="" class="tg"></a>
            </div>
        </div>
    </div>
    <div class="header__container">
        <div class="header-main">
            <a href="" class="header-main__logo">
                <img src="/images/logo_dark.png" alt="">
            </a>
            <div class="header-main__search">
                <div class="header-search">
                    <input type="text" name="" placeholder="Введите имя или id  девушки" class="header-search__input">
                    <button class="header-search__button"></button>
                </div>
                <a href="" class="header-search__link">Поиск по <span></span></a>
            </div>
            <div class="header-main__buttons">
                <a href="" class="button button--add js-open-modal"
                   data-modal="register"><span>Добавить анкету</span></a>
                <a href="" class="button button--login js-open-modal"
                   data-modal="login"><span>Войти в кабинет</span></a>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="main__container">

    </div>
</main>
<footer class="footer">
    <div class="footer__container">
        <div class="footer-links">
            <a href="/" class="footer-links__logo">
                <img src="/images/logo_dark.png" alt="">
            </a>
            <div class="footer-links__menu">
                <a href="#">Элитные</a>
                <a href="#">Индивидуалки</a>
                <a href="#">Дешевые</a>
                <a href="#">БДСМ</a>
                <a href="#">Массажистки</a>
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
                <a href="#">Политика конфиденциальности</a>
                <a href="#">Пользовательское соглашение</a>
            </div>
        </div>
    </div>
</footer>
<div class="modal" data-modal="login">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
            d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
            fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Войти</p>
    <p class="modal__subtitle">Авторизируйтесь в системе заполнив необходимые поля для входа</p>
</div>
<div class="modal" data-modal="register">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
            d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
            fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Зарегистрироваться</p>
</div>
<div class="overlay" id="overlay-modal"></div>
</body>
</html>
