<?php

declare( strict_types=1 );

namespace App\Orchid\Layouts\Page;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Support\Carbon;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PageListLayout extends Table {

    public $target = 'pages';

    public function columns(): array {

        return [
            TD::make( 'active', '' )
              ->align( 'left' )
              ->cantHide()
              ->width( '30px' )
              ->render( function ( Page $page ) {
                  $color = '#eff1f9';
                  if ( $page->active == 1 ) {
                      $color = '#43d040';
                  }

                  return '<span style="display: block;width: 16px;height: 16px;border-radius: 50%;background: ' . $color . ';"></span>';
              } ),
            TD::make( 'id', 'ID' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Page $page ) {
                  return '<strong>' . $page->id . '</strong>';
              } )->width( '100px' ),
            TD::make( 'title', 'Название' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Page $page ) {
                  return '<b><a href"' . route( 'platform.pages.edit', [ 'id' => $page->id ] ) . '">' . $page->title . '</a></b>';
              } ),
            TD::make( 'slug', 'URL' )
              ->sort()
              ->cantHide(),
            TD::make( 'created_at', 'Дата создания' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Page $page ) {
                  return Carbon::parse( $page->created_at )->format( "d.m.Y H:i:s" );
              } ),
            TD::make( 'updated_at', 'Дата редактирования' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Page $page ) {
                  return Carbon::parse( $page->updated_at )->format( "d.m.Y H:i:s" );
              } ),
            TD::make( __( 'Actions' ) )
              ->align( TD::ALIGN_CENTER )
              ->width( '100px' )
              ->render( function ( Page $page ) {
                  return DropDown::make()
                                 ->icon( 'options-vertical' )
                                 ->list( [
                                     Button::make( $page->active == 1 ? 'Деактивировать' : 'Активировать' )
                                           ->route( 'platform.pages' )
                                           ->icon( 'power' )
                                           ->method( 'status', [
                                               'id'     => $page->id,
                                               'status' => $page->active == 1 ? 0 : 1
                                           ] ),
                                     Link::make( __( 'Edit' ) )
                                         ->route( 'platform.pages.edit', $page->id )
                                         ->icon( 'pencil' ),

                                     Button::make( __( 'Delete' ) )
                                           ->icon( 'trash' )->style( 'color: #df0031;' )
                                           ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                                           ->method( 'remove', [
                                               'id' => $page->id,
                                           ] ),
                                 ] );
              } ),
        ];
    }
}
