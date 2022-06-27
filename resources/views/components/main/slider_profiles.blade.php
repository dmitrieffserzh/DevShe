<section class="section">
    <div class="section__container">
        <h2 class="section__title">{{ $title }}</h2>
        <div id="{{ $id }}" class="profiles-slider swiper">
            <div class="profiles-slider__list swiper-wrapper">
            @foreach($items as $item)
                <div class="swiper-slide">
                @include('components.profiles.item_list', ['item' => $item])
                </div>
            @endforeach
            </div>
        </div>
    </div>
</section>
