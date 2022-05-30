

<div>
@php( $tmp = '')
@foreach($test as $block)

    @if ($tmp != $block->block_title)
            <h3> {{$block->block_title }}</h3>
            @php( $tmp = $block->block_title )
    @endif

    <p>{{ $block->name }}</p>
    <p>{{ $block->description }}</p>
@endforeach
</div>
