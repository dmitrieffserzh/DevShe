@extends('app')

@section('h1', $heading ?? 'Каталог девушек')

@section('content')
    <div class="profiles-list">
    @foreach($profiles as $item)
        @include('components.profiles.item_list', ['item' => $item])
    @endforeach
    </div>
@endsection
