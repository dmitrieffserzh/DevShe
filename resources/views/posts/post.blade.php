@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    {!! $post->content !!}
@endsection
