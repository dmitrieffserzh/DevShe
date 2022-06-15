@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    @include('profiles.aside')
    <div class="content">
        CONTENT
    </div>
@endsection
