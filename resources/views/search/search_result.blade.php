@extends('app')

@section('h1', $heading ?? 'Каталог девушек')

@section('content')
    <div class="profiles-list">

        @if(empty($profiles))
            <h4 style="padding: 0 .5rem;">По вашему запросу ничего не найдено :(</h4>
        @else
            @foreach($profiles as $item)
                @include('components.profiles.item_list', ['item' => $item])
            @endforeach
        @endif
    </div>
@endsection
