@foreach($results as $item)
    @include('components.profiles.item_list', ['item' => $item])
@endforeach