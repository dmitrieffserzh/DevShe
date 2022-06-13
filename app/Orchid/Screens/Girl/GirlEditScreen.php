<?php

declare( strict_types=1 );

namespace App\Orchid\Screens\Girl;

use App\Models\Place;
use App\Models\Profile;
use App\Models\Station;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
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
use Orchid\Support\Color;
use App\Helpers;


class GirlEditScreen extends Screen {

    public $profile;

    public function query( Profile $profile ): iterable {
        $profile->load( 'prices', 'attachment' );

        return [
            'profile' => $profile,
            //   'permission' => $user->getStatusPermission(),
        ];
    }

    public function name(): ?string {
        return $this->profile->exists ? 'Редактирование профиля' : 'Создание профиля';
    }

    public function description(): ?string {
        return 'Details such as name, email and password';
    }

    public function permission(): ?iterable {
        return [
            'platform.systems.users',
        ];
    }

    public function commandBar(): iterable {
        return [
            Button::make( __( 'Remove' ) )
                  ->icon( 'trash' )
                  ->confirm( __( 'Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.' ) )
                  ->method( 'remove' )
                  ->canSee( $this->profile->exists )
                  ->style( 'color: #df0031;' ),
            Button::make( 'Отменить' )
                  ->icon( 'close' )
                  ->method( 'cancel' ),
            Button::make( 'Сохранить' )
                  ->icon( 'check' )
                  ->method( 'update' )
                  ->canSee( $this->profile->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
            Button::make( __( 'Save' ) )
                  ->icon( 'check' )
                  ->method( 'create' )
                  ->canSee( ! $this->profile->exists )
                  ->class( 'float-end btn btn-' . Color::PRIMARY() ),
        ];
    }


    public function getServices() {
        $test = DB::table( 'services' )
                  ->join( 'services_field', 'services.id', '=', 'services_field.service_id' )
                  ->leftJoin( 'fields', function ( $join ) {
                      $join->on( 'services_field.id', '=', 'fields.field_id' )
                           ->where( 'fields.profile_id', '=', $this->profile->id );
                  } )
                  ->select( 'services.name as block_title', 'services_field.name', 'services_field.id as service_id', 'fields.id', 'fields.description' )
                  ->orderBy( 'services.id' )
                  ->orderBy( 'services_field.sort')
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
                    CheckBox::make( 'profile[services][' . $item->service_id . '][field_id]' )
                        //->title( $item->name )
                            ->placeholder( $item->name )
                            ->checked( $item->id ?: false ),
                    TextArea::make( 'profile[services][' . $item->service_id . '][description]' )
                            ->placeholder( 'Короткое описание' )
                            ->value( $item->description )
                            ->rows( 2 )->style( 'max-width: 100%;width: 100%;' )
                ] ),
            );
        }
        array_push( $arr, Layout::view( 'platform.row', [
            'title' => $item->block_title,
            'forms' => $fields
        ] ) );

        return $arr;
    }

    public function layout(): iterable {
        return [
            Layout::columns( [
                Layout::rows( [
                    Group::make( [
                        CheckBox::make( 'profile.active' )
                                ->placeholder( 'Активировать' )
                                ->sendTrueOrFalse()
                                ->checked(),
                        CheckBox::make( 'profile.express' )
                                ->placeholder( 'Экспресс' )
                                ->sendTrueOrFalse(),
                        CheckBox::make( 'profile.private' )
                                ->placeholder( 'Закрытый каталог' )
                                ->sendTrueOrFalse(),
                    ] ),

                    Group::make( [
                        Input::make( 'profile.name' )
                             ->title( 'Имя' )
                             ->placeholder( 'Введите имя' )
                             ->required(),
                        Select::make( 'profile.age' )
                              ->title( 'Возраст' )
                              ->options( Helpers::getGirlAge() )
                              ->required(),
                        Input::make( 'profile.height' )
                            //->mask( '999' )
                             ->title( 'Рост' )
                             ->placeholder( '' )
                             ->required(),
                        Input::make( 'profile.weight' )
                            //->mask( '999' )
                             ->title( 'Вес' )
                             ->placeholder( '' )
                             ->required(),
                    ] ),

                    Group::make( [
                        Select::make( 'profile.breast_size' )
                              ->title( 'Размер груди' )
                              ->options( Helpers::getGirlBreast() )
                              ->required(),
                        RadioButtons::make( 'profile.breast_type' )
                                    ->title( 'Тип' )
                                    ->value( 0 )
                                    ->options( [
                                        0 => 'Натуральная',
                                        1 => 'Силикон'
                                    ] )
                                    ->required(),
                    ] ),

                    Group::make( [
                        Select::make( 'profile.appearance' )
                              ->title( 'Внешность' )
                              ->options( Helpers::getGirlAppearance() ),
                        Select::make( 'profile.haircolor' )
                              ->title( 'Типаж' )
                              ->options( Helpers::getGirlHaircolor() )
                              ->required(),
                        Select::make( 'profile.haircut' )
                              ->title( 'Интимная стрижка' )
                              ->options( Helpers::getGirlHaircut() )
                              ->required(),
                    ] ),

                    Group::make( [
                        Select::make( 'profile.section' )
                              ->title( 'Раздел' )
                              ->options( Helpers::getGirlSection() )
                              ->required(),
                        Relation::make( 'profile.places' )
                                ->fromModel( Place::class, 'name' )
                                ->title( 'Место встречи' )
                                ->multiple()
                                ->required(),
                    ] ),

                    Group::make( [
                        Input::make( 'profile.phone' )
                             ->mask( '+7 (999) 999-99-99' )
                             ->title( 'Номер телефона' )
                             ->placeholder( '' )
                             ->required(),
                        Input::make( 'profile.whatsapp' )
                             ->title( 'Номер WhatsApp' )
                             ->placeholder( '' ),
                        Input::make( 'profile.telegram' )
                             ->title( 'Номер Telegram' )
                             ->placeholder( '' ),
                    ] ),

                    Group::make( [
                        Input::make( 'profile.city' )
                             ->title( 'Город' )
                             ->placeholder( 'Введите город' )
                             ->required(),

                        Relation::make( 'profile.stations' )
                                ->fromModel( Station::class, 'name' )
                                ->title( 'Станция метро' )
                                ->multiple(),
                    ] )

                ] ),
                //->title( 'Информация' ),
            ] ),

            Layout::columns( [
                Layout::rows( [
                    Upload::make( 'profile.attachment' )
                          ->title( 'Загрузить' )
                          ->targetRelativeUrl()
                ] )->title( 'Изображения' )
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
                            //->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.day_two_hours_in' )
                             ->title( 'У меня 2 часа:' )
                            //->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.day_one_hour_out' )
                             ->title( 'У тебя 1 час:' )
                            //->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.day_two_hours_out' )
                             ->title( 'У тебя 2 часа:' )
                            //->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                    ] ),
                ] )->title( 'Тариф "День"' ),

                Layout::rows( [
                    Group::make( [
                        Input::make( 'profile.prices.night_one_hour_in' )
                             ->title( 'У меня 1 час:' )
                            ///->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.night_two_hours_in' )
                             ->title( 'У меня 2 часа:' )
                            //->mask( '₽ 9999999' ),
                             ->placeholder( '₽' ),
                        //->required(),
                        Input::make( 'profile.prices.night_one_hour_out' )
                             ->title( 'У тебя 1 час:' )
                            // ->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                        Input::make( 'profile.prices.night_two_hours_out' )
                             ->title( 'У тебя 2 часа:' )
                            //->mask( '₽ 9999999' )
                             ->placeholder( '₽' ),
                    ] ),
                ] )->title( 'Тариф "Ночь"' ),
                Layout::columns( [
                    Layout::rows( [
                        Group::make( [
                            Input::make( 'profile.prices.night_all_in' )
                                ->title( 'Ночь у меня:' )
                                //->mask( '₽ 9999999' )
                                ->placeholder( '₽' ),
                            Input::make( 'profile.prices.night_all_out' )
                                ->title( 'Ночь у тебя:' )
                                //->mask( '₽ 9999999' )
                                ->placeholder( '₽' ),
                        ] ),
                    ] )->title( 'Тариф "Полная ночь"' ),
            ] ),

            // SERVICES
            $this->getServices(),

            Layout::rows( [
                Group::make( [
                    Button::make( 'Отменить' )
                          ->method( 'cancel' )
                          ->icon( 'close' )
                          ->class( 'float-start btn btn-' . Color::SECONDARY() ),
                    Button::make( 'Сохранить' )
                          ->method( 'update' )
                          ->icon( 'check' )
                          ->canSee( $this->profile->exists )
                          ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                    Button::make( 'Сохранить' )
                          ->method( 'create' )
                          ->icon( 'check' )
                          ->canSee( ! $this->profile->exists )
                          ->class( 'float-end btn btn-' . Color::PRIMARY() ),
                ] )
            ] )
        ];
    }

    public function create( Request $request ) {

        // NEW PROFILE
        $profile              = new Profile;
        $profile->active      = $request->profile['active'];
        $profile->private     = $request->profile['private'];
        $profile->name        = $request->profile['name'];
        $profile->phone       = $request->profile['phone'];
        $profile->whatsapp    = $request->profile['whatsapp'];
        $profile->telegram    = $request->profile['telegram'];
        $profile->age         = $request->profile['age'];
        $profile->height      = $request->profile['height'];
        $profile->weight      = $request->profile['weight'];
        $profile->breast_size = $request->profile['breast_size'];
        $profile->breast_type = $request->profile['breast_type'];
        $profile->appearance  = $request->profile['appearance'];
        $profile->section     = $request->profile['section'];
        $profile->express     = $request->profile['express'];
        $profile->city        = $request->profile['city'];
        $profile->haircut     = $request->profile['haircut'];
        $profile->haircolor   = $request->profile['haircolor'];
        $profile->description = $request->profile['description'];

        $profile->save();

        $profile->places()->sync( $request->profile['places'] );
        $profile->stations()->sync( $request->profile['stations'] );
        $profile->prices()->create( $request->profile['prices'] );
        $profile->attachment()->syncWithoutDetaching( $request->profile['attachment'], [] );

        $collection       = collect( $request->profile['services'] );
        $filteredServices = $collection->filter( function ( $value ) {
            if ( isset( $value['field_id'] ) && $value['field_id'] == 'on' ) {
                return $value;
            }
        } );

        $services = $filteredServices->map( function ( $value, $key ) {
            return [
                'field_id'    => $key,
                'description' => isset( $value['description'] ) ? $value['description'] : null
            ];
        } );

        $profile->fields()->createMany( $services->toArray() );


        Toast::success( 'Профиль успешно сохранен' );

        return redirect()->route( 'platform.girls' );
    }

    public function update( Profile $profile, Request $request ) {
        $profile->update( $request->profile );

        $profile->places()->sync( $request->profile['places'] );
        $profile->stations()->sync( $request->profile['stations'] );
        $profile->prices()->update( $request->profile['prices'] );
        $profile->attachment()->syncWithoutDetaching( $request->profile['attachment'], [] );

        $collection       = collect( $request->profile['services'] );
        $filteredServices = $collection->filter( function ( $value ) {
            if ( isset( $value['field_id'] ) && $value['field_id'] == 'on' ) {
                return $value;
            }
        } );

        $services = $filteredServices->map( function ( $value, $key ) {
            return [
                'field_id'    => $key,
                'description' => isset( $value['description'] ) ? $value['description'] : null
            ];
        } );


        $profile->fields()->delete();
        $profile->fields()->createMany( $services->toArray() );

        Toast::success( 'Профиль успешно обновлен' );

        return redirect()->route( 'platform.girls' );
    }

    public function remove( Profile $profile ) {
        $profile->delete();

        Toast::info( __( 'User was removed' ) );

        return redirect()->route( 'platform.girls' );
    }

    public function cancel() {
        return redirect()->route( 'platform.girls' );
    }
}
