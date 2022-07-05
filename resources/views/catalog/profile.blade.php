@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    <div class="profile">
        <div class="profile__column">
            <div class="profile__images">
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
            </div>
        </div>
        <div class="profile__column">
            <div class="rates">
                <div class="rates__title">
                    <h2>Тарифы:</h2>
                    <span/>Дата обновления: {{ \Illuminate\Support\Carbon::parse( $profile->updated_at )->format( "d.m.Y" )}}</span>
                </div>
                <div class="rates__list">
                    <div class="rate rate--day">
                        <div class="rate__item">
                            <div class="rate__title">У меня:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div
                                    class="rate__value">{{$profile->prices->day_one_hour_in ? $profile->prices->day_one_hour_in.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div
                                    class="rate__value">{{$profile->prices->day_two_hours_in ?$profile->prices->day_two_hours_in.' руб' : '---'}}</div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div
                                    class="rate__value">{{$profile->prices->day_one_hour_in ?$profile->prices->day_one_hour_in.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div
                                    class="rate__value">{{$profile->prices->day_two_hours_out ?$profile->prices->day_two_hours_out.' руб' : '---'}}</div>
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
                <ul class="information__list">
                    <li class="information__item">Возраст: <span>{{ Helpers::getGirlAgeValue($profile->age) }}</span></li>
                    <li class="information__item">Рост: <span>{{ $profile->height }}</span></li>
                    <li class="information__item">Вес: <span>{{ $profile->weight }}</span></li>
                    <li class="information__item">Грудь: <span>{{ Helpers::getGirlBreastValue($profile->breast_size) }}{{$profile->breast_type ? ', Силикон':', Натуральная' }}</span></li>
                    <li class="information__item">Цвет волос: <span>{{ Helpers::getGirlHaircolorValue($profile->haircolor) }}</span></li>
                    <li class="information__item">Внешность: <span>{{ Helpers::getGirlAppearanceValue($profile->appearance) }}</span></li>
                    <li class="information__item">Интимная стрижка: <span>{{ Helpers::getGirlHaircutValue($profile->haircut) }}</span></li>
                </ul>
                @if($profile->description)
                <div class="description">
                    {{ $profile->description }}
                </div>
                @endif
            </div>
            <div class="contacts">
                <a href="tel:{{ Helpers::getPhoneFormatLink($profile->phone) }}" class="contacts__phone">{{ $profile->phone }}</a>
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
                                <div class="service__title{{$service['check'] ? ' active':'' }}">{{ $service['name'] }}</div>
                                <div class="service__description">{{ $service['description'] }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            <div class="add-testimonial">
                <a href="#" class="button">Оставить отзыв</a>
            </div>
        </div>
    </div>

    @if(isset($related))
        @include('components.main.slider_profiles', ['id'=> 'new-girls', 'title'=> 'Похожие девушки', 'items' => $related])
    @endif

@endsection
