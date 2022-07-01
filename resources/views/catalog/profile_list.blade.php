@extends('app')

@section('h1', $heading ?? 'Каталог девушек')

@section('content')
    @include('components.filter')
    <div class="profiles-list">
    @foreach($profiles as $item)
        @include('components.profiles.item_list', ['item' => $item])
    @endforeach
    </div>
    {{ $profiles->links('components.button-more') }}
@endsection
