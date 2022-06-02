<?php

declare( strict_types=1 );

namespace App\Orchid\Layouts\Girl;

use App\Models\Profile;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class GirlListLayout extends Table {
    /**
     * @var string
     */
    public $target = 'profile';

    /**
     * @return TD[]
     */
    public function columns(): array {

        return [

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
                  return '<strong>' . $profile->name . '</strong>';
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

                                     Link::make( __( 'Edit' ) )
                                         ->route( 'platform.girls.edit', $profile->id )
                                         ->icon( 'pencil' ),

                                     Button::make( __( 'Delete' ) )
                                           ->icon( 'trash' )
                                           ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                                           ->method( 'remove', [
                                               'id' => $profile->id,
                                           ] ),
                                 ] );
              } ),


//
//
//
//
//            TD::make('email', __('Email'))
//                ->sort()
//                ->cantHide()
//                ->filter(Input::make())
//                ->render(function (User $user) {
//                    return ModalToggle::make($user->email)
//                        ->modal('asyncEditUserModal')
//                        ->modalTitle($user->presenter()->title())
//                        ->method('saveUser')
//                        ->asyncParameters([
//                            'user' => $user->id,
//                        ]);
//                }),
//
//            TD::make('updated_at', __('Last edit'))
//                ->sort()
//                ->render(function (User $profiles) {
//                    return $user->updated_at->toDateTimeString();
//                }),
//
//            TD::make(__('Actions'))
//                ->align(TD::ALIGN_CENTER)
//                ->width('100px')
//                ->render(function (User $user) {
//                    return DropDown::make()
//                        ->icon('options-vertical')
//                        ->list([
//
//                            Link::make(__('Edit'))
//                                ->route('platform.systems.users.edit', $user->id)
//                                ->icon('pencil'),
//
//                            Button::make(__('Delete'))
//                                ->icon('trash')
//                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
//                                ->method('remove', [
//                                    'id' => $user->id,
//                                ]),
//                        ]);
//                }),
        ];
    }
}
