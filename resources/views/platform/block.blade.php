@foreach($rates as $rate)
    <div class="rounded bg-white mb-3 p-3">
        <div class="d-flex flex-row align-items-center justify-content-between pb-2 mb-3 border-bottom">
        <h3>{{ $rate['name'] }}</h3>
        <a href="{{ route('platform.rates.edit', $rate['id']) }}" class="btn btn-primary">
            Изменить
        </a>
        </div>
        <div class="d-flex flex-row align-items-top justify-content-between">
            <div class="w-25 p-3 bg-primary" style="border-radius: .5rem">
                <strong class="d-block mb-3">Цены</strong>
                <div class="d-flex justify-content-between small p-2 mb-2 border-dashed" style="border-radius: .25rem"><span>{{ $rate['plan_one_name'] }}</span><span> = {{ $rate['plan_one_price'] }} &#8381;</span></div>
                <div class="d-flex justify-content-between small p-2 mb-2 border-dashed" style="border-radius: .25rem"><span>{{ $rate['plan_two_name'] }}</span><span> = {{ $rate['plan_two_price'] }} &#8381;</span></div>
                <div class="d-flex justify-content-between small p-2 mb-0 border-dashed" style="border-radius: .25rem"><span>{{ $rate['plan_three_name'] }}</span><span> = {{ $rate['plan_three_price'] }} &#8381;</span></div>
            </div>
            <div class="w-75 p-3">
                <strong class="d-block mb-3">Описание</strong>
                <div class="mb-3 small">{{ $rate['description'] ?? '---' }}</div>
                <strong class="d-block mb-3">Информация</strong>
                <div class="small">{{ $rate['information'] ?? '---' }}</div>
            </div>
        </div>
    </div>
@endforeach


