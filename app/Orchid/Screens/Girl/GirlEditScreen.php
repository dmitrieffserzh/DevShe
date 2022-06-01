<?php

declare( strict_types=1 );

namespace App\Orchid\Screens\Girl;

use App\Models\Price;
use App\Models\Profile;
use App\Models\Station;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\UserSwitch;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\RadioButtons;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Helpers;


class GirlEditScreen extends Screen {

    public $user;

    public function query( User $user ): iterable {
        $user->load( [ 'roles' ] );

        return [
            'user'       => $user,
            'permission' => $user->getStatusPermission(),
        ];
    }

    public function name(): ?string {
        return $this->user->exists ? 'Edit User' : 'Create User';
    }

    public function description(): ?string {
        return 'Details such as name, email and password';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable {
        return [
            Button::make( __( 'Impersonate user' ) )
                  ->icon( 'login' )
                  ->confirm( 'You can revert to your original state by logging out.' )
                  ->method( 'loginAs' )
                  ->canSee( $this->user->exists && \request()->user()->id !== $this->user->id ),

            Button::make( __( 'Remove' ) )
                  ->icon( 'trash' )
                  ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                  ->method( 'remove' )
                  ->canSee( $this->user->exists ),

            Button::make( __( 'Save' ) )
                  ->icon( 'check' )
                  ->method( 'save' ),
        ];
    }


    public function getServices() {
        $test = DB::table( 'services' )
                  ->join( 'services_field', 'services.id', '=', 'services_field.service_id' )
                  ->leftJoin( 'fields', 'services_field.id', '=', 'fields.field_id' )
                  ->select( 'services.name as block_title', 'services_field.name', 'fields.id', 'fields.description' )
                  ->orderBy( 'services.id' )
                  ->get();


        $arr = [];
        $tmp = '';
        if ( count( $test ) > 0 ) {
            $tmp = $test[0]->block_title;
        }
        $fields = [];

        foreach ( $test as $item ) {

            if ( $tmp != $item->block_title ) {
                array_push( $arr, Layout::view( 'platform.row', [
                    'title' => 'Предпочтения "' . $tmp . '"',
                    'forms' => $fields
                ] ) );
                $tmp    = $item->block_title;
                $fields = array();
            }

            array_push( $fields,
                Group::make( [
                    CheckBox::make( 'profile[service][' . $item->id . ']' )
                        //->title( $item->name )
                            ->placeholder( $item->name )
                            ->checked( $item->id ? true : false ),
                    TextArea::make( 'profile[service][' . $item->id . '][description]' )
                            ->placeholder( 'Короткое описание' )
                            ->value( $item->description )
                            ->rows( 2 )->style( 'max-width: 100%;width: 100%;' )
                ] ),
            );
        }
        array_push( $arr, Layout::view( 'platform.row', [
            'title' => 'Предпочтения "' . $item->block_title . '"',
            'forms' => $fields
        ] ) );

        return $arr;
    }

    public function layout(): iterable {
        return [

            Layout::columns( [
                Layout::rows( [
                    Input::make( 'profile[name]' )
                         ->title( 'Имя' )
                         ->placeholder( 'Введите имя' ),
                    Group::make( [
                        Select::make( 'profile[age]' )
                              ->title( 'Возраст' )
                              ->options( Helpers::getGirlAge() )
                              ->value( 0 ),
                        Input::make( 'profile[height]' )
                             ->mask( '999' )
                             ->title( 'Рост' )
                             ->placeholder( '' ),
                        Input::make( 'profile[weight]' )
                             ->mask( '999' )
                             ->title( 'Вес' )
                             ->placeholder( '' ),
                    ] ),
                    Group::make( [
                        Select::make( 'profile[breast_size]' )
                              ->title( 'Размер груди' )
                              ->options( Helpers::getGirlBreast() )
                              ->value( 0 ),
                        RadioButtons::make( 'profile[breast_type]' )
                                    ->title( 'Тип' )
                                    ->options( [
                                        0 => 'Натуральная',
                                        1 => 'Силикон'
                                    ] )->value( 0 ),
                    ] ),
                    Group::make( [
                        Select::make( 'profile[appearance]' )
                              ->title( 'Внешность' )
                              ->options( Helpers::getGirlAppearance() )
                              ->value( 0 ),
                        Select::make( 'profile[haircut]' )
                              ->title( 'Интимная стрижка' )
                              ->options( Helpers::getGirlHaircut() )
                              ->value( 0 ),
                    ] ),
                ] )->title( 'О девушке' ),


                Layout::rows( [
                    CheckBox::make( 'profile[express]' )
                            ->sendTrueOrFalse()
                            ->title( 'Экспресс' )
                            ->placeholder( 'Есть' ),
                    Group::make( [
                        Select::make( 'profile[section]' )
                              ->title( 'Раздел' )
                              ->options( Helpers::getGirlSection() )
                              ->value( 0 ),
                        Select::make( 'profile[meeting_place]' )
                              ->title( 'Место вастречи' )
                              ->options( Helpers::getGirlPlace() )
                              ->value( 0 ),
                    ] ),
                    Group::make( [
                        Input::make( 'profile[phone]' )
                             ->mask( '+7 (999) 999-99-99' )
                             ->title( 'Номер телефона' )
                             ->placeholder( '' ),
                        Input::make( 'profile[whatsapp]' )
                             ->title( 'Номер WhatsApp' )
                             ->placeholder( '' ),
                        Input::make( 'profile[telegram]' )
                             ->title( 'Номер Telegram' )
                             ->placeholder( '' ),
                    ] ),

                    Input::make( 'profile[city]' )
                         ->title( 'Город' )
                         ->placeholder( 'Введите город' ),

                    Relation::make( 'profile.stations' )
                            ->fromModel( Station::class, 'name' )
                            ->title( 'Станция метро' )
                            ->multiple(),

                ] )->title( 'Информация' ),
            ] ),

            Layout::columns( [
                Layout::rows( [
                    Upload::make( 'profile.photos' )
                          ->title( 'Загрузить' )
                ] )->title( 'Изображения' ),
            ] ),

            Layout::columns( [
                Layout::rows( [
                    TextArea::make( 'profile.description' )
                            ->placeholder( 'Короткое описание' )
                            ->rows( 6 )->style( 'max-width: 100%;width: 100%;' ),
                ] )->title( 'Описание' ),
            ] ),


            // PRICES
            Layout::columns( [
                Layout::rows( [
                    Group::make( [
                        Input::make( 'profile.prices.day_one_hour_in' )
                             ->title( 'У меня 1 час:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.day_two_hours_in' )
                             ->title( 'У меня 2 часа:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.day_one_hour_out' )
                             ->title( 'У тебя 1 час:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.day_two_hours_out' )
                             ->title( 'У тебя 2 часа:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                    ] ),
                ] )->title( 'Тариф "День"' ),
                Layout::rows( [
                    Group::make( [
                        Input::make( 'profile.prices.night_one_hour_in' )
                             ->title( 'У меня 1 час:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.night_two_hours_in' )
                             ->title( 'У меня 2 часа:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.night_one_hour_out' )
                             ->title( 'У тебя 1 час:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.night_two_hours_out' )
                             ->title( 'У тебя 2 часа:' )
                             ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                    ] ),
                ] )->title( 'Тариф "Ночь"' ),
            ] ),

            // SERVICES
            $this->getServices(),

        ];

    }

    /**
     * @param User $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save( User $user, Request $request ) {
        // NEW USER
        $user           = new User();
        $user->name     = 'something';
        $user->password = Hash::make( 'userpassword' );
        $user->email    = 'user_' . rand( 0, 99999 ) . '@something.com';


        if ( $user->save() ) {


            $profile                = new Profile();
            $profile->user_id       = $user->id;
            $profile->name          = $request->profile['name'];
            $profile->phone         = $request->profile['phone'];
            $profile->whatsapp      = $request->profile['whatsapp'];
            $profile->telegram      = $request->profile['telegram'];
            $profile->age           = $request->profile['age'];
            $profile->height        = $request->profile['height'];
            $profile->weight        = $request->profile['weight'];
            $profile->breast_size   = $request->profile['breast_size'];
            $profile->breast_type   = $request->profile['breast_type'];
            $profile->appearance    = $request->profile['appearance'];
            $profile->section       = $request->profile['section'];
            $profile->express       = $request->profile['express'];
            $profile->meeting_place = $request->profile['meeting_place'];
            $profile->city          = $request->profile['city'];
            $profile->haircut       = $request->profile['haircut'];
            $profile->description   = $request->profile['description'];
            //$profile->images        = $request->profile['photos'] ? $request->profile['photos'] : '';
            //$profile->videos        = $request->profile['videos'];


            if ( $profile->save() ) {
                $profile->stations()->attach( $request->profile['stations'] );

                $prices = Price::create( array_push( $request->profile['prices'], [ 'profile_id' => $profile->id ] ) );
                $profile->prices()->attach( $prices->id );
            }
        }


        dd( $request );

//        $request->validate( [
//            'user.email' => [
//                'required',
//                Rule::unique( User::class, 'email' )->ignore( $user ),
//            ],
//        ] );
//
//        $permissions = collect( $request->get( 'permissions' ) )
//            ->map( function ( $value, $key ) {
//                return [ base64_decode( $key ) => $value ];
//            } )
//            ->collapse()
//            ->toArray();
//
//        $user->when( $request->filled( 'user.password' ), function ( Builder $builder ) use ( $request ) {
//            $builder->getModel()->password = Hash::make( $request->input( 'user.password' ) );
//        } );
//
//        $user
//            ->fill( $request->collect( 'user' )->except( [ 'password', 'permissions', 'roles' ] )->toArray() )
//            ->fill( [ 'permissions' => $permissions ] )
//            ->save();
//
//        $user->replaceRoles( $request->input( 'user.roles' ) );

        Toast::info( __( 'User was saved.' ) );

        //return redirect()->route( 'platform.systems.users' );
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     *
     */
    public function remove( User $user ) {
        $user->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.systems.users' );
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs( User $user ) {
        UserSwitch::loginAs( $user );

        Toast::info( __( 'You are now impersonating this user' ) );

        return redirect()->route( config( 'platform.index' ) );
    }
}
