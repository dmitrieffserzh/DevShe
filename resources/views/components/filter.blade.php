<div class="filter">
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Возраст:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ \Illuminate\Support\Arr::first(\App\Helpers::getGirlAge()) }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ \Illuminate\Support\Arr::last(\App\Helpers::getGirlAge()) }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Рост:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ \App\Models\Profile::min('height') }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ \App\Models\Profile::max('height') }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Вес:</div>
            <div class="block__input">
                <input type="number" placeholder="от {{ \App\Models\Profile::min('weight') }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number" placeholder="до {{ \App\Models\Profile::max('weight') }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block">
        <div class="block">
            <div class="block__title">Размер груди:</div>
            <div class="block__input">
                <input type="number"
                       placeholder="от {{ \Illuminate\Support\Arr::first(\App\Helpers::getGirlBreast()) }}">
                <span>от</span>
            </div>
            <div class="block__input">
                <input type="number"
                       placeholder="до {{ \Illuminate\Support\Arr::last(\App\Helpers::getGirlBreast()) }}">
                <span>до</span>
            </div>
        </div>
    </div>
    <div class="filter__block block">
        <div class="block__title">Предпочтения:</div>
        <select name="" id="" class="js-select">
            <option value="">-Выберете предпочтение-</option>
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Типаж:</div>
        <select name="" id="" class="js-select">
            @foreach( \App\Helpers::getGirlAppearance() as $key=>$value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
    <div class="filter__block block">
        <div class="block__title">Место встречи:</div>
        <select name="" id="" class="js-select">
            <option value="">-Выберите место встречи-</option>
            @foreach( \App\Models\Place::all() as $item)
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
