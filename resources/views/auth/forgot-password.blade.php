<div class="modal" data-modal="forgot-password">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
                fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Восстановить пароль</p>
    <p class="modal__subtitle">Если Вы забыли пароль, введите E-mail. Контрольная строка смены пароля, а также ваши регистрационные данные, будут высланы вам по E-mail</p>
    <form class="form-login" method="POST" action="">
        <div class="form-login__alert"></div>
        @csrf
        <label for="">
            <input class="form-login__input icon icon--email" type="text" name="email"  value="{{ old('email')}}" placeholder="E-mail" required
                   autofocus>
        </label>
        <button class="form-login__button" type="submit">Восстановить</button>
    </form>
</div>