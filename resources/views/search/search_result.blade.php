@extends('app')
@section('breadcrumbs', Diglactic\Breadcrumbs\Breadcrumbs::render('search'))
@section('h1', $heading ?? 'Каталог девушек')

@section('content')
    <div class="profiles-list">
        @if($items)
            @foreach($items as $item)
                @include('components.profiles.item_list', ['item' => $item])
            @endforeach
        @else
            <h4 style="padding: 0 .5rem;">По вашему запросу ничего не найдено :(</h4>
        @endif
    </div>
@endsection
