<div class="modal" data-modal="reset-password">
    <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
                d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
                fill="#D1D1D1"></path>
    </svg>
    <p class="modal__title">Сбросить пароль</p>
    <p class="modal__subtitle">Авторизируйтесь в системе заполнив необходимые поля для входа</p>
    <form class="form-login" method="POST" action="">
        <div class="form-login__alert"></div>

        <input type="hidden" name="token" value="{{ $request->route('token') }}">



        @csrf
        <label for="">
            <input class="form-login__input icon icon--email" type="text" name="email" placeholder="E-mail" required
                   autofocus>
        </label>
        <label for="">
            <input class="form-login__input icon icon--password" type="password" name="password" required
                   autocomplete="current-password"
                   placeholder="Пароль">
            <span class="show-password"></span>
        </label>
        <button class="form-login__button" type="submit">Войти</button>
        <div class="form-login__actions">
            <div class="input_radio">
                <input id="remember-me" type="checkbox" name="remember">
                <label for="remember-me">Запомнить меня</label>
            </div>

            @if (Route::has('password.request'))
                <a class="" href="{{ route('password.request') }}">
                    Забыли пароль?
                </a>
            @endif
        </div>
    </form>
</div>


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
