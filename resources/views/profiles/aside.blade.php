<aside class="aside">
    <div class="aside-menu">
        <ul class="aside-menu__list">
            <li class="aside-menu__item">
                <a href="{{ route('profile.index') }}" class="aside-menu__link {{ (request()->is('profile')) ? 'aside-menu__link--active' : '' }}">Личные данные</a>
            </li>
            <li class="aside-menu__item">
                <a href="{{ route('profile.rates') }}" class="aside-menu__link {{ (request()->is('profile/rates')) ? 'aside-menu__link--active' : '' }}">Тарифы и реклама</a>
            </li>
            <li class="aside-menu__item">
                <a href="{{ route('profile.payments') }}" class="aside-menu__link {{ (request()->is('profile/payments')) ? 'aside-menu__link--active' : '' }}">Оплата</a>
            </li>
            <li class="aside-menu__item">
                <a href="{{ route('logout') }}" class="aside-menu__link">Выйти</a>
            </li>
        </ul>
    </div>
</aside>
