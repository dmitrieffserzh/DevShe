@extends('app')
@section('breadcrumbs', Diglactic\Breadcrumbs\Breadcrumbs::render('profile.payments', $heading))
@section('h1', $heading ?? 'Личные данные')

@section('content')
    @include('profiles.aside')
    <div class="content">
        <div class="payments">
            <h2 class="payments__title">Выберете удобный способ оплаты</h2>
            <div class="payments__list">
                <div class="payments__item payments__item--visa"></div>
                <div class="payments__item payments__item--mastercard"></div>
                <div class="payments__item payments__item--qiwi"></div>
                <div class="payments__item payments__item--yamoney"></div>
            </div>
            <div class="rates-calculator">
                <div class="rates-calculator__amount">
                    Итого к оплате: <span id="amount">0</span> рублей
                </div>
                <a href="" class="button">Оплатить</a>
            </div>
        </div>
    </div>
@endsection
