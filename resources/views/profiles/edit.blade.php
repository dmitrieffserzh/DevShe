@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')

    {{--    <div class="content">--}}
    <div class="profile">
        <div class="profile__column">
            @include('profiles.aside')
        </div>
        <div class="profile__column">
        <!--<div class="profile__images">
                    <div class="images swiper">
                        <div class="swiper-wrapper">
                            @foreach($profile->attachment as $image)
            <div class="images__item swiper-slide">
                <img src="{{$image->url}}" alt="">
                                </div>
                            @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="thumbs swiper">
                <div class="swiper-wrapper">
@foreach($profile->attachment as $image)
            <div class="thumbs__item swiper-slide">
                <img src="{{$image->url}}" alt="">
                                </div>
                            @endforeach
                </div>
            </div>
        </div>-->
        </div>
        <div class="profile__column">
            <div class="rates">
                <div class="rates__title">
                    <h2>Тарифы:</h2>
                    <span/>Дата обновления: 25.04.2022</span>
                </div>
                <div class="rates__list">
                    <div class="rate rate--day">
                        <div class="rate__item">
                            <div class="rate__title">У меня:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">
                                    <input type="text" value="{{ $profile->prices->day_one_hour_in??'' }}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" value="{{ $profile->prices->day_two_hour_in??'' }}">
                                </div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">
                                    <input type="text" value="{{ $profile->prices->day_one_hour_in??'' }}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" value="{{ $profile->prices->day_two_hours_out??'' }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rate rate--night">
                        <div class="rate__item">
                            <div class="rate__title">У меня:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">
                                    <input type="text" value="{{$profile->prices->night_one_hour_in??''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" value="{{$profile->prices->night_two_hours_in ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div class="rate__value">
                                    <input type="text" value="{{$profile->prices->night_all_in ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">
                                    <input type="text" value="{{$profile->prices->night_one_hour_out ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" value="{{$profile->prices->night_two_hours_out ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div class="rate__value">
                                    <input type="text" value="{{$profile->prices->night_all_out ?? ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <input type="text" value="{{ $profile->height }}">
                <input type="text" value="{{ $profile->weight }}">

                <select name="profile[age]" id="">
                    @foreach(Helpers::getGirlAge() as $key=>$value)
                        <option value="{{ $key }}" @if($key == $profile->age) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>

                <select name="profile[appearance]" id="">
                    @foreach(Helpers::getGirlAppearance() as $key=>$value)
                        <option value="{{ $key }}"
                                @if($key == $profile->appearance) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>

                <select name="profile[breast_size]" id="">
                    @foreach(Helpers::getGirlBreast() as $key=>$value)
                        <option value="{{ $key }}"
                                @if($key == $profile->breast_size) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>

                <select name="profile[haircolor]" id="">
                    @foreach(Helpers::getGirlHaircolor() as $key=>$value)
                        <option value="{{ $key }}"
                                @if($key == $profile->haircolor) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>

                <select name="profile[haircut]" id="">
                    @foreach(Helpers::getGirlHaircut() as $key=>$value)
                        <option value="{{ $key }}" @if($key == $profile->haircut) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
                <label for="breast-natural">
                    Натуральная
                    <input id="breast-natural" type="radio" name="profile[breast_type]" value="0"
                           @if($profile->breast_type == 0) checked @endif>
                </label>
                <label for="breast-silicon">
                    Силикон
                    <input id="breast-silicon" type="radio" name="profile[breast_type]" value="1"
                           @if($profile->breast_type == 1) checked @endif>
                </label>

                <div class="description">
                    <textarea name="profile[description]" id="" cols="30" rows="10"
                              placeholder="Коротко о себе">{{ $profile->description }}</textarea>
                </div>

            </div>
            <div class="contacts">
                <input type="text" name="profile[phone]" value="{{ $profile->phone ?? '' }}">
                <input type="text" name="profile[whatsapp]" value="{{ $profile->whatsapp ?? '' }}">
                <input type="text" name="profile[telegram]" value="{{ $profile->telegram ?? ''}}">
            </div>
        </div>
        <div class="profile__column">
            <div class="services">
                <h2 class="services__title">Предпочтения:</h2>
                @foreach($services as $block)
                    <div class="services__block block">
                        <div class="block__title">{{ $block['title'] }}</div>
                        <div class="block__content">
                            @foreach($block['services'] as $service)
                                <div class="service">
                                    <label class="service__title">
                                        <input type="checkbox" {{$service['check'] ? ' checked':'' }}>
                                        {{ $service['name'] }}</label>
                                    <div class="service__description">
                                        <textarea name="" id="">{{ $service['description'] }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="add-testimonial">
                <a href="#" class="button">Сохранить</a>
            </div>
        </div>
    </div>
    {{--    </div>--}}
@endsection
