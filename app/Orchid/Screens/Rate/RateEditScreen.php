<?php

namespace App\Orchid\Screens\Rate;

use App\Models\Rate;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Upload;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class RateEditScreen extends Screen {

    public function query( Rate $rate ): iterable {
        return [
            'rate' => $rate
        ];
    }

    public function name(): ?string {
        return 'Редактирование тарифа';
    }

    public function commandBar(): iterable {
        return [
            Button::make( __( 'Cancel' ) )->icon( 'close' )->method( 'cancel' ),
            Button::make( __( 'Save' ) )->icon( 'check' )->method( 'update' )->class( 'float-end btn btn-' . Color::PRIMARY() ),
        ];
    }

    public function layout(): iterable {
        return [

            Layout::rows( [
                Input::make( 'rate.name' )->title( 'Название' )->style( 'max-width: 100%;width: 100%;' ),
                Quill::make( 'rate.description' )->title( 'Описание' )->placeholder( 'Введите описане тарифа' )->rows( 6 )->style( 'max-width: 100%;width: 100%;' ),
                Quill::make( 'rate.information' )->title( 'Пояснение' )->placeholder( 'Введите пояснение тарифа' )->rows( 6 )->style( 'max-width: 100%;width: 100%;' )
            ] ),

            Layout::columns( [
                Layout::rows( [
                    Input::make( 'rate.plan_one_name' )->title( 'Заголовок' ),
                    Input::make( 'rate.plan_one_price' )->title( 'Цена' )->placeholder( '₽' )
                ] ),

                Layout::rows( [
                    Input::make( 'rate.plan_two_name' )->title( 'Заголовок' ),
                    Input::make( 'rate.plan_two_price' )->title( 'Цена' )->placeholder( '₽' )
                ] ),
                Layout::rows( [
                    Input::make( 'rate.plan_three_name' )->title( 'Заголовок' ),
                    Input::make( 'rate.plan_three_price' )->title( 'Цена' )->placeholder( '₽' )
                ] )
            ] ),
            Layout::rows( [
                Picture::make( 'rate.image' )
                       ->title( 'Изображение' ),
            ] ),
            Layout::rows( [
                Group::make( [
                    Button::make( 'Отменить' )
                          ->method( 'cancel' )
                          ->icon( 'close' )
                          ->class( 'float-start btn btn-' . Color::SECONDARY() ),
                    Button::make( 'Сохранить' )
                          ->method( 'update' )
                          ->icon( 'check' )
                          ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                ] )
            ] )
        ];
    }

    public function update( Rate $rate, Request $request ) {

        $rate->updateOrFail( $request->rate );

        Toast::success( 'Тариф успешно обновлен' );

        return redirect()->route( 'platform.rates' );
    }

    public function cancel() {
        return redirect()->route( 'platform.rates' );
    }
}
