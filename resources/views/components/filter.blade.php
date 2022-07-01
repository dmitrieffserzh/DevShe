@php
    use App\Models\Profile;
    use App\Models\Place;
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
    //dd($arrServices);
@endphp
<div class="filter">
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Возраст:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ Arr::first(Helpers::getGirlAge()) }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ Arr::last(Helpers::getGirlAge()) }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Рост:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ Profile::min('height') }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ Profile::max('height') }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Вес:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ Profile::min('weight') }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ Profile::max('weight') }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Размер груди:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ Arr::first(Helpers::getGirlBreast()) }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ Arr::last(Helpers::getGirlBreast()) }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block block">
        <div class="block__title">Предпочтения:</div>
        <select name="" id="" class="js-select" multiple="multiple">
            <option value="">-Выберете предпочтение-</option>
            @foreach($arrServices as $service)
                <optgroup label="{{ $service['title'] }}">
                    @foreach($service['services'] as $service)
                        <option value="{{ $service['id'] }}">{{ $service['name'] }}</option>
                    @endforeach
                </optgroup>
            @endforeach
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Типаж:</div>
        <select name="" id="" class="js-select">
            @foreach( Helpers::getGirlAppearance() as $key=>$value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Место встречи:</div>
        <select name="" id="" class="js-select">
            <option value="">-Выберите место встречи-</option>
            @foreach( Place::all() as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Время встречи:</div>
        <select name="" id="" class="js-select">
            <option value="">-Выберите время встречи-</option>
            <option value="1 час">1 час</option>
            <option value="2 часа">2 часа</option>
            <option value="Ночь">Ночь</option>
            <option value="Эскспресс">Эскспресс</option>
        </select>
    </div>
</div>
