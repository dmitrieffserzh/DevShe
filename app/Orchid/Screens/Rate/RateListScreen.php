<?php

namespace App\Orchid\Screens\Rate;

use App\Models\Rate;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class RateListScreen extends Screen {

    public function query(): iterable {
        return [
            'rates' => Rate::all()
        ];
    }

    public function name(): ?string {
        return 'Тарифы';
    }


    public function description(): ?string {
        return 'Список тарифов на размещение';
    }

    public function commandBar(): iterable {
        return [];
    }

    public function layout(): iterable {
        return [
            Layout::view('platform.block', ['rates' => $this->query()]),

        ];
    }
}
