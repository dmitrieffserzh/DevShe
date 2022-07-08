@extends('app')
@section('breadcrumbs', Diglactic\Breadcrumbs\Breadcrumbs::render('pages', $page))
@section('h1', $heading ?? 'Личные данные')

@section('content')
    {!! $page->content !!}
@endsection
