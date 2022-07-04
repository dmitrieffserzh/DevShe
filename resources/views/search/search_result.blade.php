@extends('app')

@section('h1', $heading ?? 'Каталог девушек')

@section('content')
    <div class="profiles-list">
        @foreach($profiles as $item)
            @include('components.profiles.item_list', ['item' => $item])
        @endforeach
        @if(!empty($profiles))
            <h4>По вашему запросу ничего не найдено :(</h4>
        @endif
    </div>
@endsection
