@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')

    <form id="profile-form" class="profile-edit">
        <div class="profile-edit__column">
            @include('profiles.aside')
        </div>
        <div class="profile-edit__column">
            <div class="uploader">
                <input id="file-input" ref="file" type="file" class="man">
                <label for="file-input" class="uploader__input">
                    <p>Загрузите несколько изображений
                        или видео с рабочего стола</p>
                </label>
                <div class="uploader__thumbs">
                    @if(count($profile->attachment))
                        @php($image = $profile->attachment->first())
                            <div class="uploader__thumbs-item" data-id="{{ $image->id }}"
                                 data-sort="{{ $image->sort }}"
                                 style="background-image: url('{{ $image->url }}')">
                                <span class="delete"></span>
                            </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="profile-edit__column no-wide">
            <div class="information">
                <div class="profile-edit__row">
                    <div class="block__input">
                        <input type="text" name="profile[name]" value="{{ $profile->name ?? '' }}">
                        <span class="label">Ваше имя</span>
                    </div>
                    <div class="block__input">
                        <select name="profile[age]" id="" class="js-select">
                            @foreach(Helpers::getGirlAge() as $key=>$value)
                                <option value="{{ $key }}"
                                        @if(($profile->age ?? 0) == $key) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="label">Возраст</span>
                    </div>
                    <div class="block__input">
                        <input type="text" name="profile[city]" value="{{ $profile->city ?? '' }}">
                        <span class="label">Город</span>
                    </div>
                </div>
                <div class="profile-edit__row">
                    <div class="block__input">
                        <textarea name="profile[description]" id="">{{ $profile->description ?? '' }}</textarea>
                        <span class="label">Напишите немного о себе</span>
                    </div>
                </div>
            </div>
            <div class="add-testimonial">
                <button type="submit" class="button">Сохранить</button>
            </div>
        </div>
    </form>
@endsection
