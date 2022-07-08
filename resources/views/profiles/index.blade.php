@extends('app')
@section('breadcrumbs', Diglactic\Breadcrumbs\Breadcrumbs::render('profile', $heading))
@section('h1', $heading ?? 'Личные данные')

@section('content')
    @include('profiles.aside')
    <div class="content">
        CONTENT
    </div>
@endsection
