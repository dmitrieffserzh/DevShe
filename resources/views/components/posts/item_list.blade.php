<div class="articles__item article-item">
    <a href="{{ route('post.show', ['slug' => $item->slug]) }}" class="article-item__image"
       style="background-image: url('{!! $item->image !!}')"></a>
    <h2 class="article-item__title">
        <a href="{{ route('post.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
    </h2>
    <div class="article-item__published">{{ \Illuminate\Support\Carbon::parse( $item->created_at )->format( "d.m.Y H:i:s" )}}</div>
    <a href="{{ route('post.show', ['slug' => $item->slug]) }}" class="article-item__read-more">Подробнее</a>
</div>