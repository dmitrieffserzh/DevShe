<?php

declare( strict_types=1 );

namespace App\Orchid\Layouts\Girl;

use App\Helpers;
use App\Models\Profile;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class GirlListLayout extends Table {

    public $target = 'profile';

    public function columns(): array {

        return [
            TD::make( 'active', '' )
              ->align( 'left' )
              ->cantHide()
              ->width( '30px' )
              ->render( function ( $profile ) {
                  $color = '#eff1f9';
                  if ( $profile->active == 1 ) {
                      $color = '#43d040';
                  }

                  return '<span style="display: block;width: 16px;height: 16px;border-radius: 50%;background: ' . $color . ';"></span>';
              } ),
            TD::make( 'private', '' )
              ->align( 'left' )
              ->filter( Select::make()->options(
                  [
                      0 => 'Публичная анкета',
                      1 => 'Закрытая анкета'
                  ]
              ) )
              ->width( '30px' )
              ->render( function ( $profile ) {
                  $color = '#eff1f9';
                  if ( $profile->private == 1 ) {
                      $color = '#43d040';
                  }

                  return '<span style="display: block;width: 16px;height: 16px;border-radius: 50%;background: ' . $color . ';"></span>';
              } ),
            TD::make( 'id', 'ID' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Profile $profile ) {
                  return '<strong>' . $profile->id . '</strong>';
              } )->width( '100px' ),
            TD::make( 'name', 'Имя' )
              ->sort()
              ->cantHide()
              ->filter( Input::make() )
              ->render( function ( Profile $profile ) {
                  $imagePath = $profile->attachment()->first();

                  return view( 'platform.avatar', [
                      'id'    => $profile->id,
                      'name'  => $profile->name,
                      'image' =>  $imagePath ? '/storage/' . $imagePath['path'] . $imagePath['name'] . '.' . $imagePath['extension'] : 'https://www.gravatar.com/avatar/64e1b8d34f425d19e1ee2ea7236d3028?d=mp'

                  ] );
              } ),

            TD::make( 'section', 'Раздел' )
              ->sort()
              ->cantHide()
                ->filter( Select::make()->options(
                    Helpers::getGirlSection()
                ) )
              ->render( function ( Profile $profile ) {
                  return Helpers::getGirlSectionValue($profile->section);
              } ),

            TD::make( 'phone', 'Телефон' )
              ->sort()
              ->cantHide()
              ->filter( Input::make()->mask( '+7 (999) 999-99-99' ) )
              ->render( function ( Profile $profile ) {
                  return $profile->phone;
              } ),

            TD::make( __( 'Actions' ) )
              ->align( TD::ALIGN_CENTER )
              ->width( '100px' )
              ->render( function ( Profile $profile ) {
                  return DropDown::make()
                                 ->icon( 'options-vertical' )
                                 ->list( [
                                     Button::make( $profile->active == 1 ? 'Деактивировать' : 'Активировать' )
                                           ->route( 'platform.girls' )
                                           ->icon( 'power' )
                                           ->method( 'status', [
                                               'id'     => $profile->id,
                                               'status' => $profile->active == 1 ? 0 : 1
                                           ] ),
                                     Link::make( __( 'Edit' ) )
                                         ->route( 'platform.girls.edit', $profile->id )
                                         ->icon( 'pencil' ),

                                     Button::make( __( 'Delete' ) )
                                           ->icon( 'trash' )->style( 'color: #df0031;' )
                                           ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                                           ->method( 'remove', [
                                               'id' => $profile->id,
                                           ] ),
                                 ] );
              } ),
        ];
    }
}
