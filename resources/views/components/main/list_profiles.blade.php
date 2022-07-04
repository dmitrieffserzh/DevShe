<section class="section">
    <div class="section__container">
        <h2 class="section__title">{{ $title }}</h2>
        <div class="profiles-list">
        @foreach($items as $item)
            @include('components.profiles.item_list', ['item' => $item])
        @endforeach
        </div>
        @if($link)
        <div class="view-all">
            <a href="{{ $link }}" class="button button--view-all">Смотреть все</a>
        </div>
        @endif
    </div>
</section>
