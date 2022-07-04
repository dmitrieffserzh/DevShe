<?php

namespace App\Orchid\Screens\Slider;

use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SliderEditScreen extends Screen {

    public $slide;

    public function query( Slider $slider ): iterable {
        return [
            'slide' => $slider
        ];
    }


    public function name(): ?string {
        return $this->slide->exists ? 'Редактирование слайда' : 'Создание слайда';
    }


    public function commandBar(): iterable {
        return [
            Button::make( __( 'Remove' ) )
                  ->icon( 'trash' )
                  ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                  ->method( 'remove' )
                  ->canSee( $this->slide->exists )
                  ->style( 'color: #df0031;' ),
            Button::make( 'Отменить' )
                  ->icon( 'close' )
                  ->method( 'cancel' ),
            Button::make( 'Сохранить' )
                  ->icon( 'check' )
                  ->method( 'update' )
                  ->canSee( $this->slide->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
            Button::make( __( 'Save' ) )
                  ->icon( 'check' )
                  ->method( 'create' )
                  ->canSee( ! $this->slide->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
        ];
    }


    public function layout(): iterable {
        return [
            Layout::columns( [
                Layout::rows( [
                    CheckBox::make( 'slide.active' )
                            ->title( 'Опубликовать' )
                            ->placeholder( 'Да' )
                            ->sendTrueOrFalse()
                            ->checked(),
                    Group::make( [
                        Input::make( 'slide.title' )
                             ->title( 'Заголовок' )
                             ->placeholder( 'Введите заголовок статьи' )
                             ->required(),
                        Input::make( 'slide.sort' )
                             ->title( 'Сортировка' )
                             ->placeholder( '' )
                             ->value( 1 ),
                    ] ),
                    Quill::make( 'slide.description' )
                         ->title( 'Содержимое статьи' )
                         ->placeholder( 'Введите содержимое статьи' ),
                    Cropper::make( 'slide.image' )
                           ->title( 'Изображение' )
                           ->width( 1140 )
                           ->height( 400 )
                           ->targetUrl()
                           ->required(),
                    Group::make( [
                        Input::make( 'slide.button_text' )
                             ->title( 'Заголовок' )
                             ->placeholder( 'Введите текст кнопки' )
                             ->style( 'width: 100%;' ),
                        Input::make( 'slide.button_link' )
                             ->title( 'Заголовок' )
                             ->placeholder( 'Введите текст ссылки' )
                             ->style( 'width: 100%;' )
                    ] ),
                    Group::make( [
                        Button::make( 'Отменить' )
                              ->method( 'cancel' )
                              ->icon( 'close' )
                              ->class( 'float-start btn btn-' . Color::SECONDARY() ),
                        Button::make( 'Сохранить' )
                              ->method( 'update' )
                              ->icon( 'check' )
                              ->canSee( $this->slide->exists )
                              ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                        Button::make( 'Сохранить' )
                              ->method( 'create' )
                              ->icon( 'check' )
                              ->canSee( ! $this->slide->exists )
                              ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                    ] )
                ] )
            ] )
        ];
    }

    public function create( Request $request ) {
        $slider = Slider::create( $request->slide );
        if ( $slider ) {

            Toast::success( 'Слайд успешно сохранен' );

            return redirect()->route( 'platform.slides' );
        }
    }

    public function update( Slider $slider, Request $request ) {
        $slider->updateOrFail( $request->slider );
        Toast::success( 'Слайд успешно обновлен' );

        return redirect()->route( 'platform.slides' );
    }

    public function remove( Slider $slider ) {
        $slider->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.slides' );
    }

    public function cancel() {
        return redirect()->route( 'platform.slides' );
    }
}
