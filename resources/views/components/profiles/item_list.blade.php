@php

$attach = $item->attachment()->first();

    if($attach) {
        $img = $attach->url();
    }

@endphp



<div class="profile-item @if($item->rate_mark) shadow @endif"
     style="background-image: url('{{ $img ?? '' }}')">
    @if($item->rate_new)
    <div class="marks marks--new"></div>
    @endif
    @if($item->rate_top)
    <div class="marks marks--top"></div>
        @endif
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
                <div class="value">{{ $item->age?Helpers::getGirlAgeValue($item->age): '-'}}</div>
            </div>
            <div class="information__item">
                <div class="item">Рост:</div>
                <div class="value">{{ $item->height ?? '-' }}</div>
            </div>
            <div class="information__item">
                <div class="item">Грудь:</div>
                <div class="value">{{ $item->breast_size ? Helpers::getGirlBreastValue($item->breast_size) : '-' }}</div>
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
        @if($item->section)
    <a href="{{ route('catalog.profile', ['section' => \App\Helpers::getGirlSectionUrlValue($item->section), 'slug' => $item->slug] ) }}"
       class="profile-item__link"></a>
            @endif
</div>
