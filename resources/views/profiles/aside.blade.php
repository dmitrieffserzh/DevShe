<aside class="aside">
    <div class="aside-menu">
        <ul class="aside-menu__list">
            <li class="aside-menu__item">
                <a href="{{ route('profile.index') }}" class="aside-menu__link aside-menu__link--icon-profile{{ (request()->is('profile')) ? ' aside-menu__link--active' : '' }}">Личные данные</a>
            </li>
            @if(Auth::user()->user_type == 1)
            <li class="aside-menu__item">
                <a href="{{ route('profile.rates') }}" class="aside-menu__link aside-menu__link--icon-rate{{ (request()->is('profile/rates')) ? ' aside-menu__link--active' : '' }}">Тарифы и реклама</a>
            </li>
            @endif
            <li class="aside-menu__item">
                <a href="{{ route('profile.payments') }}" class="aside-menu__link aside-menu__link--icon-payment{{ (request()->is('profile/payments')) ? ' aside-menu__link--active' : '' }}">Оплата</a>
            </li>
            <li class="aside-menu__item">
                <a href="{{ route('logout') }}" class="aside-menu__link aside-menu__link--icon-logout">Выйти</a>
            </li>
        </ul>
    </div>
</aside>
