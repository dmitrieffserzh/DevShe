<div class="profile-item" style="background-image: url('{{ $item->attachment()->first()->url() }}')">
    <div class="profile-item__information information">
        <div class="information__column">
            <div class="information__item">
                <h4 class="name">{{ $item->name }}</h4>
                <div class="id">id: {{ $item->id }}</div>
            </div>
        </div>
        <div class="information__column">
            <div class="information__item">
                <div class="item">Возраст:</div>
                <div class="value">{{ Helpers::getGirlAgeValue($item->age) ?? '-'}}</div>
            </div>
            <div class="information__item">
                <div class="item">Рост:</div>
                <div class="value">{{ $item->height ?? '-' }}</div>
            </div>
            <div class="information__item">
                <div class="item">Грудь:</div>
                <div class="value">{{ Helpers::getGirlBreastValue($item->breast_size) }}</div>
            </div>
        </div>
        <div class="information__column">
            <div class="information__item">
                <div class="item">Час:</div>
                <div class="value">{{ $item->prices->day_one_hour_in ?? '-' }}</div>
            </div>
            <div class="information__item">
                <div class="item">Два:</div>
                <div class="value">{{ $item->prices->day_two_hours_in ?? '-' }}</div>
            </div>
            <div class="information__item">
                <div class="item">Ночь:</div>
                <div class="value">{{ $item->prices->night_all_in ?? '-' }}</div>
            </div>
        </div>
        <div class="information__column">
            <div class="information__item">
                <div class="contacts"><span></span> {{ $item->phone ?? '-' }}</div>
                <div class="description">{{ Str::limit($item->description, 90) }}</div>
            </div>
        </div>
    </div>
    <a href="{{ route('catalog.profile', ['section' => \App\Helpers::getGirlSectionUrlValue($item->section), 'slug' => $item->slug] ) }}"
       class="profile-item__link"></a>
</div>
