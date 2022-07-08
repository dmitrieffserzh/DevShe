@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')

    <form id="profile-form" class="profile-edit">
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
                            <div class="uploader__thumbs-item" data-id="{{ $image->id }}"
                                 data-sort="{{ $image->sort }}"
                                 style="background-image: url('{{ $image->url }}')">
                                <span class="delete"></span>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="description">
                <textarea name="profile[description]" id="">{{ $profile->description ?? '' }}</textarea>
                <span class="label">Напишите немного о себе</span>
            </div>
        </div>
        <div class="profile-edit__column">
            <div class="information">
                <div class="profile-edit__row">
                    <div class="block__input">
                        <input type="text" name="profile[name]" value="{{ $profile->name ?? '' }}">
                        <span class="label">Ваше имя</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[age]" id="" class="js-select" required>
                            @foreach(Helpers::getGirlAge() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if(($profile->age ?? 0) == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Возраст</span>
                    </div>
                    <div class="block__group">
                        <div class="block__input">
                            <input type="text" name="profile[height]" value="{{ $profile->height ?? ''}}" required>
                            <span class="label">Рост</span>
                        </div>
                        <div class="block__input">
                            <input type="text" name="profile[weight]" value="{{ $profile->weight ?? ''}}" required>
                            <span class="label">Вес</span>
                        </div>
                    </div>
                </div>

                <div class="profile-edit__row">
                    <div class="block__input">
                        <select name="profile[haircolor]" id="" class="js-select">
                            @foreach(Helpers::getGirlHaircolor() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if(($profile->haircolor ?? 0) == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Типаж</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[breast_size]" id="" class="js-select">
                            @foreach(Helpers::getGirlBreast() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if(($profile->breast_size ?? 0) == $key) selected @endif>{{ $value }}</option>
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
                                        @if(($profile->appearance ?? 0) == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Внешность</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[haircut]" id="" class="js-select">
                            @foreach(Helpers::getGirlHaircut() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if(($profile->haircut ?? 0) == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Интимная стрижка</span>
                    </div>
                    <div class="block__input">
                        <input type="text" name="profile[city]" value="{{ $profile->city ?? '' }}" required>
                        <span class="label">Город</span>
                    </div>
                </div>
                <div class="profile-edit__row">
                    <div class="block__input">
                        <select name="profile[stations][]" id="" class="js-select" multiple>
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
                        <select name="profile[section]" id="" class="js-select" required>
                            @foreach(Helpers::getGirlSection() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if($profile->section ?? 0 == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Раздел</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[places][]" id="" class="js-select" multiple required>
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
                        <input type="text" name="profile[phone]" value="{{ $profile->phone ?? '' }}" required>
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
                                    <input type="text" name="profile[prices][day_one_hour_in]"
                                           value="{{ $profile->prices->day_one_hour_in ?? '' }}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][day_two_hours_in]"
                                           value="{{ $profile->prices->day_two_hours_in ??' ' }}">
                                </div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][day_one_hour_out]"
                                           value="{{ $profile->prices->day_one_hour_out ?? '' }}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][day_two_hours_out]"
                                           value="{{ $profile->prices->day_two_hours_out ?? '' }}">
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
                                    <input type="text" name="profile[prices][night_one_hour_in]"
                                           value="{{$profile->prices->night_one_hour_in ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][night_two_hours_in]"
                                           value="{{$profile->prices->night_two_hours_in ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][night_all_in]"
                                           value="{{$profile->prices->night_all_in ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="rate__item">
                            <div class="rate__title">У тебя:</div>
                            <div class="rate__block">
                                <div class="rate__name">1 час</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][night_one_hour_out]"
                                           value="{{$profile->prices->night_one_hour_out ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">2 часа</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][night_two_hours_out]"
                                           value="{{$profile->prices->night_two_hours_out ?? ''}}">
                                </div>
                            </div>
                            <div class="rate__block">
                                <div class="rate__name">Вся ночь</div>
                                <div class="rate__value">
                                    <input type="text" name="profile[prices][night_all_out]"
                                           value="{{$profile->prices->night_all_out ?? ''}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input_radio">
                <input id="express" name="profile[express]" type="checkbox">
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
                                        <input id="{{ $id }}" name="profile[services][{{ $service['id'] }}][field_id]"
                                               type="checkbox" {{$service['check'] ? ' checked':'' }}>
                                        <label for="{{ $id }}">{{ $service['name'] }}</label>
                                    </div>
                                    <div class="service__description">
                                        <textarea name="profile[services][{{ $service['id'] }}][description]"
                                                  id="">{{ $service['description'] }}</textarea>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="add-testimonial">
                <button type="submit" class="button">Сохранить</button>
            </div>
        </div>
    </form>
    <div class="modal" data-modal="profile-save">
        <svg class="modal__close js-modal-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
                    d="M23.954 21.03l-9.184-9.095 9.092-9.174-1.832-1.807-9.09 9.179-9.176-9.088-1.81 1.81 9.186 9.105-9.095 9.184 1.81 1.81 9.112-9.192 9.18 9.1z"
                    fill="#D1D1D1"></path>
        </svg>
        <p class="modal__title"></p>
        <div class="modal__content"></div>
    </div>
@endsection
