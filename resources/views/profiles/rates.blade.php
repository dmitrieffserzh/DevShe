@extends('app')

@section('h1', $heading ?? '')

@section('content')
    @include('profiles.aside')
    <div class="content">
        <div class="rates">
            @foreach($rates as $item)
                <div class="rates__item rate">
                    <div class="rate__content">
                        <h2 class="rate__title">{{ $item->name }}</h2>
                        <div class="rate__description">{!! $item->description !!}</div>
                        <div class="rate__offers offers">
                            <h2 class="offers__title">Выберите тарифный план:</h2>
                            <div class="input_radio" @if($item->information)style="display: inline-block;"@endif>
                                <input type="radio" name="rate_{{ $item->id }}" value="plan_one_price" id="rate_{{ $item->id }}_{{ $item->plan_one_price }}">
                                <label for="rate_{{ $item->id }}_{{ $item->plan_one_price }}">{{ $item->plan_one_name }}</label>
                            </div>
                            <div class="input_radio" @if($item->information)style="display: inline-block;"@endif>
                                <input type="radio" name="rate_{{ $item->id }}" value="plan_one_price" id="rate_{{ $item->id }}_{{ $item->plan_two_price }}">
                                <label for="rate_{{ $item->id }}_{{ $item->plan_two_price }}">{{ $item->plan_two_name }}</label>
                            </div>
                            <div class="input_radio" @if($item->information)style="display: inline-block;"@endif>
                                <input type="radio" name="rate_{{ $item->id }}" value="plan_one_price" id="rate_{{ $item->id }}_{{ $item->plan_three_price }}">
                                <label for="rate_{{ $item->id }}_{{ $item->plan_three_price }}">{{ $item->plan_three_name }}</label>
                            </div>
                        </div>
                        @if($item->information)
                            <div class="rate__information">{!! $item->information !!}</div>
                        @endif
                    </div>
                    <div class="rate__image">
                        <img src="{{ $item->image ?? '' }}" alt="{{ $item->name }}" width="150px">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
