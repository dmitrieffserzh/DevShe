<div class="modal" data-modal="login">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
            d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
            fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Войти</p>
    <p class="modal__subtitle">Авторизируйтесь в системе заполнив необходимые поля для входа</p>
    <form class="form-login" method="POST" action="">
        <div class="form-login__alert"></div>
        @csrf
        <label for="">
            <input class="form-login__input icon icon--email" type="text" name="email" placeholder="E-mail" required autofocus>
        </label>
        <label for="">
            <input class="form-login__input icon icon--password" type="password" name="password" required
                   autocomplete="current-password"
                   placeholder="Пароль">
            <span class="show-password"></span>
        </label>
        <button class="form-login__button" type="submit">Войти</button>
        <div>
            <label for="">
                <input type="checkbox" name="remember">
                Запомнить меня
            </label>
        </div>
        @if (Route::has('password.request'))
            <a class="" href="{{ route('password.request') }}">
                Забыли пароль?
            </a>
        @endif
    </form>
</div>
