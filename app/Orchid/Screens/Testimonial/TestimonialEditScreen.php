<?php

namespace App\Orchid\Screens\Testimonial;

use App\Models\Slider;
use App\Models\Testimonial;
use App\Orchid\Layouts\Slider\SliderListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class TestimonialEditScreen extends Screen {
    public $testimonial;

    public function query( Testimonial $testimonial ): iterable {
        return [
            'testimonial' => $testimonial
        ];
    }


    public function name(): ?string {
        return $this->testimonial->exists ? 'Редактирование отзыва' : 'Создание отзыва';
    }


    public function commandBar(): iterable {
        return [
            Button::make( __( 'Remove' ) )
                ->icon( 'trash' )
                ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                ->method( 'remove' )
                ->canSee( $this->testimonial->exists )
                ->style( 'color: #df0031;' ),
            Button::make( 'Отменить' )
                ->icon( 'close' )
                ->method( 'cancel' ),
            Button::make( 'Сохранить' )
                ->icon( 'check' )
                ->method( 'update' )
                ->canSee( $this->testimonial->exists )
                ->class( 'float-end btn btn-' . Color::PRIMARY() ),
            Button::make( __( 'Save' ) )
                ->icon( 'check' )
                ->method( 'create' )
                ->canSee( ! $this->testimonial->exists )
                ->class( 'float-end btn btn-' . Color::PRIMARY() ),
        ];
    }


    public function layout(): iterable {
        return [
            Layout::columns( [
                Layout::rows( [
                    CheckBox::make( 'testimonial.active' )
                        ->title( 'Опубликовать' )
                        ->placeholder( 'Да' )
                        ->sendTrueOrFalse()
                        ->checked(),
                    Quill::make( 'testimonial.content' )
                        ->title( 'Содержимое отзыва' )
                        ->placeholder( 'Введите отзыв' ),
                    Group::make( [
                        Button::make( 'Отменить' )
                            ->method( 'cancel' )
                            ->icon( 'close' )
                            ->class( 'float-start btn btn-' . Color::SECONDARY() ),
                        Button::make( 'Сохранить' )
                            ->method( 'update' )
                            ->icon( 'check' )
                            ->canSee( $this->testimonial->exists )
                            ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                        Button::make( 'Сохранить' )
                            ->method( 'create' )
                            ->icon( 'check' )
                            ->canSee( ! $this->testimonial->exists )
                            ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                    ] )
                ] )
            ] )
        ];
    }

    public function create( Request $request ) {
        $testimonial = Testimonial::create( $request->testimonial );
        if ( $testimonial ) {

            Toast::success( 'Отзыв успешно сохранен' );

            return redirect()->route( 'platform.testimonials' );
        }
    }

    public function update( Testimonial $testimonial, Request $request ) {
        $testimonial->update( $request->testimonial );
        Toast::success( 'Отзыв успешно обновлен' );

        return redirect()->route( 'platform.testimonial' );
    }

    public function remove( Testimonial $testimonial ) {
        $testimonial->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.testimonials' );
    }

    public function cancel() {
        return redirect()->route( 'platform.testimonials' );
    }
}
