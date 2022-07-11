@extends('app')
@section('content')
    <div class="not-found">
        <h2 class="not-found__title">Упс что-то пошло не так...</h2>
        <img src="/images/404.png" alt="">
        <p class="not-found__text">
            Страница с таким адресом не найдена
            Возможно, указан неправильный адрес страницы
            Вероятно, страница была удалена или перемещена
        </p>
        <a href="/" class="button">Вернутся на Главную</a>
    </div>
@endsection