<?php

namespace App\Orchid\Screens\Testimonial;

use App\Models\Testimonial;
use App\Orchid\Layouts\Testimonial\TestimonialListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class TestimonialListScreen extends Screen {
    public function query(): iterable {
        return [
            'testimonial' => Testimonial::filters()->defaultSort( 'id', 'desc' )->paginate(),
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
            TestimonialListLayout::class,
        ];
    }

    public function status( Request $request ) {
        $testimonial         = Testimonial::findOrFail( $request->get( 'id' ) );
        $testimonial->active = $request->get( 'status' );
        if ( $testimonial->save() ) {
            Toast::info( 'Статус отзыва успешно изменен!' );

            return redirect()->route( 'platform.slides' );
        }
    }

    public function remove( Request $request ): void {
        Testimonial::findOrFail( $request->get( 'id' ) )->delete();
        Toast::info( 'Отзыв успешно удален' );
    }
}
