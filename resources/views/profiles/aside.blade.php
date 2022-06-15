<aside class="aside">
    <div class="aside-menu">
        <ul class="aside-menu__list">
            <li class="aside-menu__item">
                <a href="" class="aside-menu__link {{ (request()->is('profile')) ? 'aside-menu__link--active' : '' }}">Личные данные</a>
            </li>
            <li class="aside-menu__item">
                <a href="" class="aside-menu__link">Тарифы и реклама</a>
            </li>
            <li class="aside-menu__item">
                <a href="" class="aside-menu__link">Оплата</a>
            </li>
            <li class="aside-menu__item">
                <a href="{{ route('logout') }}" class="aside-menu__link">Выйти</a>
            </li>
        </ul>
    </div>
</aside>
