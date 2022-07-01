{{--{{ $paginator->nextPageUrl() }}--}}
{{--{{dd($paginator)}}--}}

@if ($paginator->hasPages())
    <div class="load-more">
        <a href="#" id="load-more" data-current-page="{{ $paginator->currentPage() }}" data-total-page="{{ $paginator->lastPage() }}" class="button">Загрузить еще</a>
    </div>
@endif

