<div class="d-sm-flex flex-row flex-wrap text-sm-left align-items-center">
	<span class="thumb-sm avatar m-r-xs" style="width: 40px; height: 40px; overflow: hidden">
        <img src="{{ $image ?: 'https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?d=mp' }}"
             class="bg-light" alt="{{ $name }}" style="max-width: fit-content;">
    </span>
    <div class="ml-sm-3 ml-md-0 ml-xl-3 mt-2 mt-sm-0 mt-md-2 mt-xl-0">
        <h6 class="mb-0" style="margin: 0 1rem;">
            <a href="{{ route( 'platform.girls.edit', $id ) }}" class=",">{{ $name }}</a>
        </h6>
    </div>
</div>
