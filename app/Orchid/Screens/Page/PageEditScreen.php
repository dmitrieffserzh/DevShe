<?php

namespace App\Orchid\Screens\Page;

use App\Models\Page;
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

class PageEditScreen extends Screen {

    public $page;

    public function query( Page $page ): iterable {
        return [
            'page' => $page
        ];
    }


    public function name(): ?string {
        return $this->page->exists ? 'Редактирование страницы' : 'Создание страницы';
    }


    public function commandBar(): iterable {
        return [
            Button::make( __( 'Remove' ) )
                  ->icon( 'trash' )
                  ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                  ->method( 'remove' )
                  ->canSee( $this->page->exists )
                  ->style( 'color: #df0031;' ),
            Button::make( 'Отменить' )
                  ->icon( 'close' )
                  ->method( 'cancel' ),
            Button::make( 'Сохранить' )
                  ->icon( 'check' )
                  ->method( 'update' )
                  ->canSee( $this->page->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
            Button::make( __( 'Save' ) )
                  ->icon( 'check' )
                  ->method( 'create' )
                  ->canSee( ! $this->page->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
        ];
    }


    public function layout(): iterable {
        return [
            Layout::columns( [
                Layout::rows( [
                    CheckBox::make( 'page.active' )
                            ->title( 'Опубликовать' )
                            ->placeholder( 'Да' )
                            ->sendTrueOrFalse()
                            ->checked(),
                    Input::make( 'page.title' )
                         ->title( 'Заголовок' )
                         ->placeholder( 'Введите заголовок статьи' )
                         ->style( 'width: 100%;' )
                         ->required(),
                    Input::make( 'page.slug' )
                         ->title( 'URL' )
                         ->placeholder( 'Введите URL страницы' )
                         ->style( 'width: 100%;' )
                         ->required(),
                    Quill::make( 'page.content' )
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
                              ->canSee( $this->page->exists )
                              ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                        Button::make( 'Сохранить' )
                              ->method( 'create' )
                              ->icon( 'check' )
                              ->canSee( ! $this->page->exists )
                              ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                    ] )
                ] )
            ] )
        ];
    }

    public function create( Request $request ) {
        $page = Page::create( $request->page );
        if ( $page ) {

            Toast::success( 'Страница успешно сохранена' );

            return redirect()->route( 'platform.pages' );
        }
    }

    public function update( Page $page, Request $request ) {
        $page->updateOrFail( $request->page );
        Toast::success( 'Страница успешно обновлена' );

        return redirect()->route( 'platform.pages' );
    }

    public function remove( Page $page ) {
        $page->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.pages' );
    }

    public function cancel() {
        return redirect()->route( 'platform.pages' );
    }
}
