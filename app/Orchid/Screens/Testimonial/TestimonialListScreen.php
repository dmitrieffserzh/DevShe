<?php

namespace App\Orchid\Screens\Testimonial;

use App\Models\Slider;
use App\Models\Testimonial;
use App\Orchid\Layouts\Slider\SliderListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class TestimonialListScreen extends Screen {
    public function query(): iterable {
        return [
            'slider' => Testimonial::filters()->defaultSort( 'id', 'desc' )->paginate(),
        ];
    }

    public function name(): ?string {
        return 'Отзывы';
    }

    public function commandBar(): iterable {
        return [
            Link::make( __( 'Add' ) )
                ->icon( 'plus' )
                ->route( 'platform.testimonials.create' ),
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
            Toast::info( 'Статус отзыва успешно изменен!' );

            return redirect()->route( 'platform.slides' );
        }
    }

    public function remove( Request $request ): void {
        Slider::findOrFail( $request->get( 'id' ) )->delete();
        Toast::info( 'Отзыв успешно удален' );
    }
}
