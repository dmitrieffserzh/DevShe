@php
    use App\Models\Profile;
    use App\Models\Place;
    use App\Models\Price;
    use Illuminate\Support\Facades\DB;
        $services = DB::table( 'services' )
                       ->join( 'services_field', 'services.id', '=', 'services_field.service_id' )
                       ->leftJoin( 'fields', function ( $join ) {
                           $join->on( 'services_field.id', '=', 'fields.field_id' )
                                ->where( 'fields' );
                       } )
                       ->select( 'services.name as block_title', 'services_field.name', 'services_field.id as service_id', 'fields.id', 'fields.description' )
                       ->orderBy( 'services.id' )
                       ->orderBy( 'services_field.sort' )
                       ->get();

         $arrServices = [];
         $tmp         = '';
         if ( count( $services ) > 0 ) {
             $tmp = $services[0]->block_title;
         }
         $servicesList = [];
         foreach ( $services as $item ) {

             if ( $tmp != $item->block_title ) {
                 array_push( $arrServices, [ 'title' => $tmp, 'services' => $servicesList ] );
                 $tmp          = $item->block_title;
                 $servicesList = array();
             }

             array_push( $servicesList, [
                 'name'        => $item->name,
                 'description' => $item->description,
                 'id'       => $item->service_id
             ] );
         }
         array_push( $arrServices, [ 'title' => $item->block_title, 'services' => $servicesList ] );

@endphp

{{--<div class="block">--}}
{{--    <div class="block__title">цена:</div>--}}
{{--    <div class="block__input">--}}
{{--        <input type="number" name="filter[price][min]" value="{{ Price::min('day_one_hour_in') }}" placeholder="от {{ Price::min('day_one_hour_in') }}">--}}
{{--        <span>от</span>--}}
{{--    </div>--}}
{{--    <div class="block__input">--}}
{{--        <input type="number" name="filter[price][max]" value="{{ Price::max('day_one_hour_in') }}" placeholder="до {{ Price::max('day_one_hour_in') }}">--}}
{{--        <span>до</span>--}}
{{--    </div>--}}
{{--</div>--}}


<form id="filter" class="filter">
    <input type="hidden" name="filter[section]" value="{{ $section_id }}">
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Возраст:</div>
            <div class="block__input">
                <input type="number" name="filter[age][min]" value="{{ Arr::first(Helpers::getGirlAge()) }}" placeholder="от {{ Arr::first(Helpers::getGirlAge()) }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" name="filter[age][max]" value="{{ Arr::last(Helpers::getGirlAge()) }}" placeholder="до {{ Arr::last(Helpers::getGirlAge()) }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Рост:</div>
            <div class="block__input">
                <input type="number" name="filter[height][min]" value="{{ Profile::min('height') }}" placeholder="от {{ Profile::min('height') }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" name="filter[height][max]" value="{{ Profile::max('height') }}" placeholder="до {{ Profile::max('height') }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Вес:</div>
            <div class="block__input">
                <input type="number" name="filter[weight][min]" value="{{ Profile::min('weight') }}" placeholder="от {{ Profile::min('weight') }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" name="filter[weight][max]" value="{{ Profile::max('weight') }}" placeholder="до {{ Profile::max('weight') }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Размер груди:</div>
            <div class="block__input">
                <input type="number" name="filter[breast_size][min]" value="{{ Arr::first(Helpers::getGirlBreast()) }}"
                       placeholder="от {{ Arr::first(Helpers::getGirlBreast()) }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" name="filter[breast_size][max]" value="{{ Arr::last(Helpers::getGirlBreast()) }}"
                       placeholder="до {{ Arr::last(Helpers::getGirlBreast()) }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block block">
        <div class="block__title">Предпочтения:</div>
        <select name="filter[services][]" id="" class="js-select js-select-price" multiple="multiple">
            <option value="0" selected>-Выберете предпочтение-</option>
            @foreach($arrServices as $service)
                <optgroup label="{{ $service['title'] }}">
                    @foreach($service['services'] as $service)
                        <option value="{{ $service['id'] }}">{{ $service['name'] }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
        <div id="price" class="min-max-slider" data-legendnum="5">
            <label for="min">Minimum price</label>
            <input id="min" class="min" name="filter[price][min]" type="range" step="1" min="{{ Price::min('day_one_hour_in') }}" max="{{ Price::max('day_one_hour_in') }}" />
            <label for="max">Maximum price</label>
            <input id="max" class="max" name="filter[price][max]" type="range" step="1" min="{{ Price::min('day_one_hour_in') }}" max="{{ Price::max('day_one_hour_in') }}" />
        </div>
    </div>
    <div class="filter__block block">
        <div class="block__title">Типаж:</div>
        <select name="filter[haircolor]" id="" class="js-select">
            @foreach( Helpers::getGirlHairColor() as $key=>$value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Место встречи:</div>
        <select name="filter[places]" id="" class="js-select">
            <option value="0">-Выберите место встречи-</option>
            @foreach( Place::all() as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Время встречи:</div>
        <select name="filter[time]" id="" class="js-select">
            <option value="">-Выберите время встречи-</option>
            <option value="day_one_hour_in">1 час</option>
            <option value="day_two_hours_in">2 часа</option>
            <option value="night_all_in">Ночь</option>
            <option value="express">Эскспресс</option>
        </select>
    </div>
</form>
