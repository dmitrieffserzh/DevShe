<?php

namespace App\Orchid\Screens\Post;

use App\Models\Post;
use App\Orchid\Layouts\Post\PostListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PostListScreen extends Screen {

    public function query(): iterable {
        return [
            'posts' => Post::filters()->defaultSort( 'id', 'desc' )->paginate(),
        ];
    }

    public function name(): ?string {
        return 'Статьи';
    }

    public function commandBar(): iterable {
        return [
            Link::make( __( 'Add' ) )
                ->icon( 'plus' )
                ->route( 'platform.posts.create' ),
        ];
    }

    public function layout(): iterable {
        return [
            PostListLayout::class,
        ];
    }

    public function status( Request $request ) {
        $profile         = Post::findOrFail( $request->get( 'id' ) );
        $profile->active = $request->get( 'status' );
        if ( $profile->save() ) {
            Toast::info( 'Статус статьи успешно изменен!' );

            return redirect()->route( 'platform.posts' );
        }
    }

    public function remove( Request $request ): void {
        Post::findOrFail( $request->get( 'id' ) )->delete();
        Toast::info( 'Статья успешно удалена' );
    }
}
