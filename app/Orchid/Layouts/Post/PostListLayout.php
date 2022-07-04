<?php

declare( strict_types=1 );

namespace App\Orchid\Layouts\Post;

use App\Models\Post;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PostListLayout extends Table {

    public $target = 'posts';

    public function columns(): array {

        return [
            TD::make( 'active', '' )
              ->align( 'left' )
              ->cantHide()
              ->width( '30px' )
              ->render( function ( $post ) {
                  $color = '#eff1f9';
                  if ( $post->active == 1 ) {
                      $color = '#43d040';
                  }

                  return '<span style="display: block;width: 16px;height: 16px;border-radius: 50%;background: ' . $color . ';"></span>';
              } ),
            TD::make( 'id', 'ID' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Profile $post ) {
                  return '<strong>' . $post->id . '</strong>';
              } )->width( '100px' ),
            TD::make( 'title', 'Название' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() ),
            TD::make( 'created_at', 'Дата создания' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() ),
            TD::make( 'updated_at', 'Дата редактирования' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() ),
            TD::make( __( 'Actions' ) )
              ->align( TD::ALIGN_CENTER )
              ->width( '100px' )
              ->render( function ( Post $post ) {
                  return DropDown::make()
                                 ->icon( 'options-vertical' )
                                 ->list( [
                                     Button::make( $post->active == 1 ? 'Деактивировать' : 'Активировать' )
                                           ->route( 'platform.girls' )
                                           ->icon( 'power' )
                                           ->method( 'status', [
                                               'id'     => $post->id,
                                               'status' => $post->active == 1 ? 0 : 1
                                           ] ),
                                     Link::make( __( 'Edit' ) )
                                         ->route( 'platform.girls.edit', $post->id )
                                         ->icon( 'pencil' ),

                                     Button::make( __( 'Delete' ) )
                                           ->icon( 'trash' )->style( 'color: #df0031;' )
                                           ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                                           ->method( 'remove', [
                                               'id' => $post->id,
                                           ] ),
                                 ] );
              } ),
        ];
    }
}
