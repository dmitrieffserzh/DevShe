@extends('app')
{{--@section('breadcrumbs', Diglactic\Breadcrumbs\Breadcrumbs::render('catalog.profile', $heading, $section_id))--}}
@section('h1', $heading ?? 'Профиль')
@section('profile-meta')
    <div class="profile-meta">
        <div class="profile-meta__item profile-meta__item--city-icon">{{ $profile->city ?? '' }}</div>
        @if(count($profile->stations) > 0)
            <div class="profile-meta__item profile-meta__item--metro-icon">{{ $profile->stations[0]->name}}</div>
        @endif
        <div class="profile-meta__item">id: {{ $profile->id }}</div>
    </div>
@endsection
@section('content')
    <div class="profile">
        <div class="profile__column">
            <div class="profile__images">
                <div class="images swiper">
                    <div class="swiper-wrapper">
                        @foreach($profile->attachment as $image)
                            <div class="images__item swiper-slide">
                                @if($image->extension == 'mp4')
                                    <video id="video_id{{$image->id}}" width="100%" height="auto">
                                        {{--                                        <source src=”http://techslides.com/demos/sample-videos/small.ogv” type=video/ogg>--}}
                                        <source src="{{$image->url}}" type=video/{{$image->extension}}>
                                    </video>
                                    <div id="video-controls">
                                        <button type="button" id="play-pause_id{{$image->id}}" class="button"></button>
                                    </div>
                                    <script>
                                        let video_{{$image->id}} = document.getElementById("video_id{{$image->id}}");
                                        let playButton_{{$image->id}} = document.getElementById("play-pause_id{{$image->id}}");
                                        playButton_{{$image->id}}.addEventListener("click", function () {
                                            if (video_{{$image->id}}.paused === true) {
                                                video_{{$image->id}}.play();
                                                playButton_{{$image->id}}.classList.remove('play');
                                                playButton_{{$image->id}}.classList.add('pause');
                                            } else {
                                                video_{{$image->id}}.pause();
                                                playButton_{{$image->id}}.classList.remove('pause');
                                                playButton_{{$image->id}}.classList.add('play');
                                            }
                                        });
                                    </script>
                                @else
                                    <img src="{{$image->url}}" alt="">
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div class="thumbs swiper">
                    <div class="swiper-wrapper">
                        @foreach($profile->attachment as $image)
                            <div class="thumbs__item swiper-slide"
                                 style="background-image: url('{{$image->url}}#t=0.5 ')">
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
                    <span/>Дата
                    обновления: {{ \Illuminate\Support\Carbon::parse( $profile->updated_at )->format( "d.m.Y" )}}</span>
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
                                <div
                                    class="rate__value">{{$profile->prices->night_one_hour_in ?$profile->prices->night_one_hour_in.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div
                                    class="rate__value">{{$profile->prices->night_two_hours_in ?$profile->prices->night_two_hours_in.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div
                                    class="rate__value">{{$profile->prices->night_all_in ?$profile->prices->night_all_in.' руб' : '---'}}</div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div
                                    class="rate__value">{{$profile->prices->night_one_hour_out ?$profile->prices->night_one_hour_out.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div
                                    class="rate__value">{{$profile->prices->night_two_hours_out ?$profile->prices->night_two_hours_out.' руб' : '---'}}</div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div
                                    class="rate__value">{{$profile->prices->night_all_out ?$profile->prices->night_all_out.' руб' : '---'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="information">
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
                @if($profile->description)
                    <div class="description">
                        {{ $profile->description }}
                    </div>
                @endif
            </div>
            <div class="contacts">
                <a href="tel:{{ Helpers::getPhoneFormatLink($profile->phone) }}"
                   class="contacts__phone">{{ $profile->phone }}</a>
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
                                    <div
                                        class="service__title{{$service['check'] ? ' active':'' }}">{{ $service['name'] }}</div>
                                    <div class="service__description">{{ $service['description'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            @if(Auth::check() && Auth::user()->user_type == 0)
            <div class="add-testimonial">
                <a href="#" class="button js-open-modal"
                   data-modal="add-testimonial">Оставить отзыв</a>
            </div>
            @endif
            @if(count($testimonials) > 0)
                <div class="testimonials">
                    <h2 class="testimonials__title">Отзывы</h2>
                    <div class="testimonials__list">
                        @foreach($testimonials as $item)
                            <div class="testimonials__item">
                                @php
                                $user = $item->userProfile;
                                $image = $user->attachment()->first();

                                if($image) {
									$url = $image->url();
                                } else {
                                     $url = '/images/no-avatar.jpg';
                                }
                                @endphp
                                <div class="testimonials__item-avatar" style="background-image: url('{{$url}}')">
                                </div>
                                <div class="testimonials__item-content">
                                    <h3 class="testimonials__item-name">
                                        {{ $item->userProfile->name }}
                                    </h3>
                                    {{$item->content}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>


        @section('related')
            @if(isset($related))
                @include('components.main.slider_profiles', ['id'=> 'new-girls', 'title'=> 'Похожие девушки', 'items' => $related])
            @endif
        @stop


@endsection
@section('modal')
    <div class="modal" data-modal="add-testimonial">
        <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
                fill="#D1D1D1"></path>
        </svg>
        <p class="modal__title">Оставить отзыв</p>
        <p class="modal__subtitle"></p>
        <div class="modal__content">
            <form id="testimonial-form" class="testimonial-form">
                <input type="hidden" name="testimonial[profile_id]" value="{{ $profile->id }}">
                <textarea name="testimonial[content]" id="" rows="10"></textarea>
                <button type="submit" class="button">Отправить</button>
            </form>
        </div>
    </div>
@endsection
