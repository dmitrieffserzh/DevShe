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
                                <div class="rate__value">{{$profile->prices->night_one_hour_in ?$profile->prices->night_one_hour_in.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">{{$profile->prices->night_two_hours_in ?$profile->prices->night_two_hours_in.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div class="rate__value">{{$profile->prices->night_all_in ?$profile->prices->night_all_in.' руб' : '---'}}</div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">{{$profile->prices->night_one_hour_out ?$profile->prices->night_one_hour_out.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">{{$profile->prices->night_two_hours_out ?$profile->prices->night_two_hours_out.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div class="rate__value">{{$profile->prices->night_all_out ?$profile->prices->night_all_out.' руб' : '---'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
                <input type="text" value="{{ $profile->height }}">
                <input type="text" value="{{ $profile->weight }}">

                <select name="" id="">
                    @foreach(Helpers::getGirlAge() as $key=>$value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <select name="" id="">
                    @foreach(Helpers::getGirlBreast() as $key=>$value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <ul class="information__list">
                    <li class="information__item">Возраст: <span>{{ Helpers::getGirlAgeValue($profile->age) }}</span>
                    </li>
                    <li class="information__item">Рост: <span>{{ $profile->height }}</span></li>
                    <li class="information__item">Вес: <span>{{ $profile->weight }}</span></li>
                    <li class="information__item">Грудь:
                        <span>{{ Helpers::getGirlBreastValue($profile->breast_size) }}{{$profile->breast_type ? ', Силикон':', Натуральная' }}</span>
                    </li>
                    <li class="information__item">Цвет волос:
                        <span>{{ Helpers::getGirlHaircolorValue($profile->haircolor) }}</span></li>
                    <li class="information__item">Внешность:
                        <span>{{ Helpers::getGirlAppearanceValue($profile->appearance) }}</span></li>
                    <li class="information__item">Интимная стрижка:
                        <span>{{ Helpers::getGirlHaircutValue($profile->haircut) }}</span></li>
                </ul>

                <div class="description">
                    <textarea name="" id="" cols="30" rows="10"
                              placeholder="Коротко о себе">{{ $profile->description }}</textarea>
                </div>

            </div>
            <div class="contacts">
                <a href="tel:{{ Helpers::getPhoneFormatLink($profile->phone) }}"
                   class="contacts__phone">{{ $profile->phone }}</a>

                <input type="text" value="{{ $profile->phone ?? '' }}">
                <input type="text" value="{{ $profile->whatsapp ?? '' }}">
                <input type="text" value="{{ $profile->telegram ?? ''}}">

                @if($profile->whatsapp || $profile->telegram)
                    <div class="contacts__social">
                        <span>Отвечаю на</span>
                        @if($profile->whatsapp)
                            <a href="{{ $profile->whatsapp }}" class="ws"></a>
                        @endif
                        @if($profile->telegram)
                            <a href="{{ $profile->telegram }}" class="tg"></a>
                        @endif
                    </div>
                @endif
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
