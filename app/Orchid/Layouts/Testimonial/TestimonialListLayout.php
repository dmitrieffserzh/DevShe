<?php

declare( strict_types=1 );

namespace App\Orchid\Layouts\Testimonial;

use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Support\Carbon;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use PHPUnit\Util\Test;

class TestimonialListLayout extends Table {

    public $target = 'testimonial';

    public function columns(): array {

        return [
            TD::make( 'active', '' )
              ->align( 'left' )
              ->cantHide()
              ->width( '30px' )
              ->render( function ( Testimonial $testimonial ) {
                  $color = '#eff1f9';
                  if ( $testimonial->active == 1 ) {
                      $color = '#43d040';
                  }

                  return '<span style="display: block;width: 16px;height: 16px;border-radius: 50%;background: ' . $color . ';"></span>';
              } ),
            TD::make( 'id', 'ID' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Testimonial $testimonial) {
                  return '<strong>' . $testimonial->id . '</strong>';
              } )->width( '100px' ),
            TD::make( 'title', 'Название' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Testimonial $testimonial ) {
                  return '<b>' . Link::make( \Illuminate\Support\Str::limit($testimonial->content, $limit = 60, $end = '...') )
                                     ->route( 'platform.slides.edit', $testimonial->id ) . '</b>';
              } ),
            TD::make( 'created_at', 'Дата создания' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Testimonial $testimonial) {
                  return Carbon::parse( $testimonial->created_at )->format( "d.m.Y H:i:s" );
              } ),
            TD::make( 'updated_at', 'Дата редактирования' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Testimonial $testimonial ) {
                  return Carbon::parse( $testimonial->updated_at )->format( "d.m.Y H:i:s" );
              } ),
            TD::make( __( 'Actions' ) )
              ->align( TD::ALIGN_CENTER )
              ->width( '100px' )
              ->render( function ( Testimonial $testimonial ) {
                  return DropDown::make()
                                 ->icon( 'options-vertical' )
                                 ->list( [
                                     Button::make( $testimonial->active == 1 ? 'Деактивировать' : 'Активировать' )
                                           ->route( 'platform.slides' )
                                           ->icon( 'power' )
                                           ->method( 'status', [
                                               'id'     => $testimonial->id,
                                               'status' => $testimonial->active == 1 ? 0 : 1
                                           ] ),
                                     Link::make( __( 'Edit' ) )
                                         ->route( 'platform.slides.edit', $testimonial->id )
                                         ->icon( 'pencil' ),

                                     Button::make( __( 'Delete' ) )
                                           ->icon( 'trash' )->style( 'color: #df0031;' )
                                           ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                                           ->method( 'remove', [
                                               'id' => $testimonial->id,
                                           ] ),
                                 ] );
              } ),
        ];
    }
}
