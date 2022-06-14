<div class="modal" data-modal="register">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
            d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
            fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Регистрация</p>
    <p class="modal__subtitle">Зарегистрируйтесь в системе заполнив необходимые поля</p>
    <form class="form-register" method="POST" action="">
        <div class="form-register__alert"></div>
        @csrf
        <label for="">
            <input class="form-register__input icon icon--user" type="text" name="name" placeholder="Имя" required
                   autofocus>
        </label>
        <label for="">
            <input class="form-register__input icon icon--email" type="text" name="email" placeholder="E-mail" required
                   autofocus>
        </label>
        <label for="">
            <input class="form-register__input icon icon--password" type="password" name="password" required
                   autocomplete="current-password"
                   placeholder="Пароль">
            <span class="show-password"></span>
        </label>
        <label for="">
            <input class="form-register__input icon icon--password" type="password" name="password_confirmation"
                   required
                   autocomplete="current-password"
                   placeholder="Подтвердите пароль">
            <span class="show-password"></span>
        </label>
        <button class="form-register__button" type="submit">Зарегистрироваться</button>

        <a class="js-open-modal" data-modal="login" href="#">
            {{ __('Already registered?') }}
        </a>
    </form>
</div>
