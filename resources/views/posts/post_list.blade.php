@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    <div class="articles">
        <div class="articles__list">
            @foreach($posts as $post)
                @include('components.posts.item_list', ['item' => $post])
            @endforeach
        </div>
    </div>
@endsection
