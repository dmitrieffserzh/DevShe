<?php

namespace App\Orchid\Screens\Rate;

use App\Models\Rate;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Screen;

class RateEditScreen extends Screen {

    public function query( Rate $rate ): iterable {
        return [
            'rate' => $rate
        ];
    }

    public function name(): ?string {
        return 'RateEditScreen';
    }

    public function commandBar(): iterable {
        return [
            Button::make( 'save' )->action( 'save' )->icon( 'plus' )
        ];
    }

    public function layout(): iterable {
        return [
            Layout::columns( [
                //Layout::rows( [
                Group::make( [
                    Input::make( 'name' )->title( 'Название' ),
                    TextArea::make( 'description' )->title( 'Описание' )->placeholder( 'Введите описане тарифа' )
                ] ),
                Group::make( [
                    TextArea::make( 'information' )->title( 'Пояснение' )->placeholder( 'Введите пояснение тарифа' )
                ] ),
                Group::make( [
                    Input::make( 'plan_one_name' )->title( __( 'Name' ) ),
                    Input::make( 'plan_one_price' )->title( __( 'Name' ) )
                ] ),
                Group::make( [
                    Input::make( 'plan_two_name' )->title( __( 'Name' ) ),
                    Input::make( 'plan_two_price' )->title( __( 'Name' ) )
                ] ),
                Group::make( [
                    Input::make( 'plan_three_name' )->title( __( 'Name' ) ),
                    Input::make( 'plan_three_price' )->title( __( 'Name' ) )
                ] )
                //])
            ] )
        ];
    }
}
