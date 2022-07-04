<?php

namespace App\Orchid\Screens\Page;

use App\Models\Page;
use App\Orchid\Layouts\Page\PageListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PageListScreen extends Screen {
    public function query(): iterable {
        return [
            'pages' => Page::filters()->defaultSort( 'id', 'desc' )->paginate(),
        ];
    }

    public function name(): ?string {
        return 'Страницы';
    }

    public function commandBar(): iterable {
        return [
            Link::make( __( 'Add' ) )
                ->icon( 'plus' )
                ->route( 'platform.pages.create' ),
        ];
    }

    public function layout(): iterable {
        return [
            PageListLayout::class,
        ];
    }

    public function status( Request $request ) {
        $page         = Page::findOrFail( $request->get( 'id' ) );
        $page->active = $request->get( 'status' );
        if ( $profile->save() ) {
            Toast::info( 'Статус статьи успешно изменен!' );

            return redirect()->route( 'platform.pages' );
        }
    }

    public function remove( Request $request ): void {
        Page::findOrFail( $request->get( 'id' ) )->delete();
        Toast::info( 'Статья успешно удалена' );
    }
}
