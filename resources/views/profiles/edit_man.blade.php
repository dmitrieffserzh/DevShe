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
        </div>
        <div class="profile-edit__column">
            <div class="information">
                <div class="profile-edit__row">
                    <div class="block__input">
                        <input type="text" value="{{ $profile->name ?? '' }}">
                        <span class="label">Имя</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
