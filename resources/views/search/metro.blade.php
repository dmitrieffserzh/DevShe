@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    <div class="metro-wrapper">


    <div class="marks">
        <img src="/images/metro_map_copy.png" alt="" class="metro" />
    </div>

    <script type="text/template" id="mark-template">
        <div class="mark">
            <div class="mark__name"><%= name %></div>
        </div>
    </script>
    </div>
@endsection
