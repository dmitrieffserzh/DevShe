<?php

namespace App\Orchid\Screens\Slider;

use App\Models\Slider;
use App\Orchid\Layouts\Slider\SliderListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class SliderListScreen extends Screen {
    public function query(): iterable {
        return [
            'slider' => Slider::filters()->defaultSort( 'id', 'desc' )->paginate(),
        ];
    }

    public function name(): ?string {
        return 'Слайдер на главной';
    }

    public function commandBar(): iterable {
        return [
            Link::make( __( 'Add' ) )
                ->icon( 'plus' )
                ->route( 'platform.slides.create' ),
        ];
    }

    public function layout(): iterable {
        return [
            SliderListLayout::class,
        ];
    }

    public function status( Request $request ) {
        $slide         = Slider::findOrFail( $request->get( 'id' ) );
        $slide->active = $request->get( 'status' );
        if ( $slide->save() ) {
            Toast::info( 'Статус слайда успешно изменен!' );

            return redirect()->route( 'platform.slides' );
        }
    }

    public function remove( Request $request ): void {
        Slider::findOrFail( $request->get( 'id' ) )->delete();
        Toast::info( 'Слайд успешно удален' );
    }
}
