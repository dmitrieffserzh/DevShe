@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    {!! $page->content !!}
@endsection
