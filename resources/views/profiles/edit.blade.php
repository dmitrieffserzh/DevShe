@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    <script src="http://SortableJS.github.io/Sortable/Sortable.js"></script>
    <div class="profile-edit">
        <div class="profile-edit__column">
            @include('profiles.aside')
        </div>
        <div class="profile-edit__column">

            <div class="uploader">
                <input id="file-input" ref="file" type="file" multiple>
                <label for="file-input" class="uploader__input">
                    <p>Загрузите несколько изображений
                        или видео с рабочего стола</p>
                </label>

                <div class="uploader__thumbs">
                    @if(!empty($profile->attachment))
                        @foreach($profile->attachment as $image)
                            <div class="uploader__thumbs-item" data-id="{{ $image->id }}" data-sort="{{ $image->sort }}"
                                 style="background-image: url('{{ $image->url }}')">
                                <span class="delete">х</span>
                            </div>
                        @endforeach
                    @endif
                </div>
                <script>
                    let sortableThumbs = document.querySelector('.uploader__thumbs');
                    Sortable.create(sortableThumbs, {
                            sort: true,
                            dataIdAttr: 'data-id',
                            animation: 300,

                            // Element dragging ended
                            onEnd: function (event) {
                                for (let i = 0; event.from.children.length > i; i++) {
                                    event.from.children[i].setAttribute('data-sort', i);
                                }
                            },
                        }
                    );
                </script>
            </div>
            <div class="description">
                <textarea name="profile[description]" id=""
                          placeholder="Коротко о себе">{{ $profile->description ?? '' }}</textarea>
                <span class="label">Напишите немного о себе</span>
            </div>
        </div>
        <div class="profile-edit__column">
            <div class="information">
                <div class="profile-edit__row">
                    <div class="block__input">
                        <input type="text" value="{{ $profile->name ?? '' }}">
                        <span class="label">Имя</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[age]" id="" class="js-select">
                            @foreach(Helpers::getGirlAge() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($key == !empty($profile->age)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Возраст</span>
                    </div>
                    <div class="block__group">
                        <div class="block__input">
                            <input type="text" value="{{ $profile->height ?? ''}}">
                            <span class="label">Рост</span>
                        </div>
                        <div class="block__input">
                            <input type="text" value="{{ $profile->weight ?? ''}}">
                            <span class="label">Вес</span>
                        </div>
                    </div>
                </div>

                <div class="profile-edit__row">
                    <div class="block__input">
                        <select name="profile[haircolor]" id="" class="js-select">
                            @foreach(Helpers::getGirlHaircolor() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($key == !empty($profile->haircolor)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Типаж</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[breast_size]" id="" class="js-select">
                            @foreach(Helpers::getGirlBreast() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($key == !empty($profile->breast_size)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Грудь</span>
                    </div>
                    <div class="block__group block__group--column ">
                        <div class="input_radio">
                            <input id="breast-natural" type="radio" name="profile[breast_type]" value="0"
                                   @if(!empty($profile->breast_type) == 0) checked @endif>
                            <label for="breast-natural">Натуральная</label>
                        </div>
                        <div class="input_radio">
                            <input id="breast-silicon" type="radio" name="profile[breast_type]" value="1"
                                   @if(!empty($profile->breast_type) == 1) checked @endif>
                            <label for="breast-silicon">Силикон</label>
                        </div>
                    </div>
                </div>


                <div class="profile-edit__row">
                    <div class="block__input">
                        <select name="profile[appearance]" id="" class="js-select">
                            @foreach(Helpers::getGirlAppearance() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($key == !empty($profile->appearance)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Внешность</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[haircut]" id="" class="js-select">
                            @foreach(Helpers::getGirlHaircut() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($key == !empty($profile->haircut)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Интимная стрижка</span>
                    </div>
                    <div class="block__input">
                        <input type="text" name="profile[phone]" value="{{ $profile->city ?? '' }}">
                        <span class="label">Город</span>
                    </div>
                </div>
                {{--                {{ dd($profile->stations) }}--}}
                <div class="profile-edit__row">
                    <div class="block__input">
                        <select name="profile[station]" id="" class="js-select" multiple>
                            <option value="">Не выбрано</option>
                            @foreach(\App\Models\Station::all() as $item)
                                <option value="{{ $item['id'] }}"
                                        @if(!empty($profile->stations))
                                        @for($i = 0; count($profile->stations) > $i; $i++ )
                                        @if($item['id'] == $profile->stations[$i]['id']) selected @endif
                                        @endfor
                                        @endif
                                >{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        <span class="label">Станция метро</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[section]" id="" class="js-select">
                            @foreach(Helpers::getGirlSection() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($key == !empty($profile->section)) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Раздел</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[place]" id="" class="js-select" multiple>
                            <option value="">Не выбрано</option>
                            @foreach(\App\Models\Place::all() as $item)
                                <option value="{{ $item['id'] }}"
                                        @if(!empty($profile->places))
                                        @for($i = 0; count($profile->places) > $i; $i++ )
                                        @if($item['id'] == $profile->places[$i]['id']) selected @endif
                                        @endfor
                                        @endif
                                >{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        <span class="label">Место встречи</span>
                    </div>
                </div>

                <div class="profile-edit__row">
                    <div class="block__input">
                        <input type="text" name="profile[phone]" value="{{ $profile->phone ?? '' }}">
                        <span class="label">Телефон</span>
                    </div>
                    <div class="block__input">
                        <input type="text" name="profile[whatsapp]" value="{{ $profile->whatsapp ?? '' }}">
                        <span class="label">WhatsApp</span>
                    </div>
                    <div class="block__input">
                        <input type="text" name="profile[telegram]" value="{{ $profile->telegram ?? ''}}">
                        <span class="label">Telegram</span>
                    </div>
                </div>
            </div>

            <div class="rates">
                <div class="rates__title">
                    <h2>Введите данные для тарифов услуг</h2>
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
            <div class="input_radio">
                <input id="express" type="checkbox">
                <label for="express">Есть экспресс</label>
            </div>
        </div>
        <div class="profile-edit__column">
            <div class="services">
                <h2 class="services__title">Предпочтения:</h2>
                @foreach($services as $block)
                    <div class="services__block block">
                        <div class="block__title">{{ $block['title'] }}</div>
                        <div class="block__content">
                            @foreach($block['services'] as $service)
                                @php( $id = rand(1000,99999))
                                <div class="service">
                                    <div class="input_radio">
                                        <input id="{{ $id }}" type="checkbox" {{$service['check'] ? ' checked':'' }}>
                                        <label for="{{ $id }}">{{ $service['name'] }}</label>
                                    </div>
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
@endsection
