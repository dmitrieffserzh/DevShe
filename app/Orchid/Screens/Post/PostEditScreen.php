<?php

namespace App\Orchid\Screens\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PostEditScreen extends Screen {

    public $post;

    public function query( Post $post ): iterable {
        return [
            'post' => $post
        ];
    }


    public function name(): ?string {
        return $this->post->exists ? 'Редактирование статьи' : 'Создание статьи';
    }


    public function commandBar(): iterable {
        return [
            Button::make( __( 'Remove' ) )
                  ->icon( 'trash' )
                  ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                  ->method( 'remove' )
                  ->canSee( $this->post->exists )
                  ->style( 'color: #df0031;' ),
            Button::make( 'Отменить' )
                  ->icon( 'close' )
                  ->method( 'cancel' ),
            Button::make( 'Сохранить' )
                  ->icon( 'check' )
                  ->method( 'update' )
                  ->canSee( $this->post->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
            Button::make( __( 'Save' ) )
                  ->icon( 'check' )
                  ->method( 'create' )
                  ->canSee( ! $this->post->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
        ];
    }


    public function layout(): iterable {
        return [
            Layout::columns( [
                Layout::rows( [
                    CheckBox::make( 'post.active' )
                            ->title( 'Опубликовать' )
                            ->placeholder( 'Да' )
                            ->sendTrueOrFalse()
                            ->checked(),
                    Input::make( 'post.title' )
                         ->title( 'Заголовок' )
                         ->placeholder( 'Введите заголовок статьи' )
                         ->style( 'width: 100%;' )
                         ->required(),
                    Input::make( 'page.slug' )
                        ->title( 'URL' )
                        ->placeholder( 'Введите URL страницы' )
                        ->style( 'width: 100%;' )
                        ->required(),
                    Quill::make( 'post.content' )
                         ->title( 'Содержимое статьи' )
                         ->placeholder( 'Введите содержимое статьи' )
                         ->required(),
                    Group::make( [
                        Button::make( 'Отменить' )
                              ->method( 'cancel' )
                              ->icon( 'close' )
                              ->class( 'float-start btn btn-' . Color::SECONDARY() ),
                        Button::make( 'Сохранить' )
                              ->method( 'update' )
                              ->icon( 'check' )
                              ->canSee( $this->post->exists )
                              ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                        Button::make( 'Сохранить' )
                              ->method( 'create' )
                              ->icon( 'check' )
                              ->canSee( ! $this->post->exists )
                              ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                    ] )
                ] )
            ] )
        ];
    }

    public function create( Request $request ) {
        $post = Post::create( $request->post );
        if ( $post ) {

            Toast::success( 'Статья успешно сохранена' );

            return redirect()->route( 'platform.posts' );
        }
    }

    public function update( Post $post, Request $request ) {
        $post->updateOrFail( $request->post );
        Toast::success( 'Статья успешно обновлена' );

        return redirect()->route( 'platform.posts' );
    }

    public function remove( Post $post ) {
        $post->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.posts' );
    }

    public function cancel() {
        return redirect()->route( 'platform.posts' );
    }
}
