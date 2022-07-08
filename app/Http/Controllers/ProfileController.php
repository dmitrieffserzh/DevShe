<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Profile;
use App\Models\Rate;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Orchid\Attachment\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }


    private $profile_id = '';

    public function index( Request $request ) {

        $user = Auth::user();
        if ( $user->user_type == 0 ) {
            return view( 'profiles.edit_man', [
                'heading'  => 'Личные данные',
                'profile' => $user
            ] );
        }


        $profile = $user->profile;

        if ( ! $profile ) {
            // NEW PROFILE
            $profile          = new Profile;
            $profile->user_id = Auth::user()->id;
            $profile->active  = 1;
            $profile->private = 0;
            $profile->name    = $request->profile['name'] ?? Auth::user()->name;
            $profile->save();
            $profile->slug = Str::slug( $profile->name . '-' . $profile->id );
            $profile->save();
        }

        $this->profile_id = $profile->id;


        $services = DB::table( 'services' )
                      ->join( 'services_field', 'services.id', '=', 'services_field.service_id' )
                      ->leftJoin( 'fields', function ( $join ) {
                          $join->on( 'services_field.id', '=', 'fields.field_id' )
                               ->where( 'fields.profile_id', '=', $this->profile_id );
                      } )
                      ->select( 'services.name as block_title', 'services_field.name', 'services_field.id as service_id', 'fields.id', 'fields.description' )
                      ->orderBy( 'services.id' )
                      ->orderBy( 'services_field.sort' )
                      ->get();

        $arrServices = [];
        $tmp         = '';
        if ( count( $services ) > 0 ) {
            $tmp = $services[0]->block_title;
        }
        $servicesList = [];
        foreach ( $services as $item ) {

            if ( $tmp != $item->block_title ) {
                array_push( $arrServices, [ 'title' => $tmp, 'services' => $servicesList ] );
                $tmp          = $item->block_title;
                $servicesList = array();
            }

            array_push( $servicesList, [
                'id'          => $item->service_id,
                'name'        => $item->name,
                'description' => $item->description,
                'check'       => $item->id ? true : false
            ] );
        }
        array_push( $arrServices, [ 'title' => $item->block_title, 'services' => $servicesList ] );


        return view( 'profiles.edit', [
            'heading'  => 'Личные данные',
            'profile'  => $profile,
            'services' => $arrServices
        ] );
    }

    public function saveProfile( Request $request ) {
        $user = Auth::user();

        if ( $user->user_type == 0 ) {
            if ( $user->update( $request->profile ) ) {
                return response()->json( [ 'success' => 'Профиль успешно обновлен!' ] );
            }

            return response()->json( [ 'error' => 'Ошибка при обновлении!' ] );
        }

        $profile = Profile::where( 'user_id', Auth::user()->id )->first();

        if ( $profile ) {

            $profile->updated_at = Carbon::now();

            $profile->update( $request->profile );
            $profile->places()->sync( $request->profile['places'] );

            if ( empty( $request->profile['stations'] ) ) {
                $profile->stations()->detach();
            } else {
                $profile->stations()->sync( $request->profile['stations'] );
            }

            if ( $profile->prices()->exists() ) {
                $profile->prices()->update( $request->profile['prices'] );
            } else {
                $profile->prices()->create( $request->profile['prices'] );
            }


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

            return response()->json( [ 'success' => 'Профиль успешно обновлен!' ] );
        }

        return response()->json( [ 'success' => 'Хуйнаны!' ] );
    }


    public function rates() {
        return view( 'profiles.rates', [ 'heading' => 'Тарифы и реклама', 'rates' => Rate::all() ] );
    }

    public function payments() {
        return view( 'profiles.payments', [ 'heading' => 'Оплата' ] );
    }

    public function uploadFiles( Request $request ) {

        if ( Auth::user()->user_type == 0 ) {
            $model = Auth::user();
            if ( count( $model->attachment ) > 0 ) {
                $model->attachment()->delete();
            }
        }

        if ( Auth::user()->user_type == 1 ) {
            $model = Profile::where( 'user_id', Auth::user()->id )->firstOrFail();
        }

        $filesRequest = $request->file( 'files' );
        $attachment   = [];
        for ( $i = 0; count( $filesRequest ) > $i; $i ++ ) {
            $files        = new File( $filesRequest[ $i ] );
            $attached     = $model->attachment()->syncWithoutDetaching( $files->load(), [] );
            $attachment[] = $model->attachment()->where( 'attachment_id', $attached['attached'][0] )->first();
        }

        return response()->json( $attachment );
    }

    public function deleteFiles( Request $request ) {
        if ( Auth::user()->user_type == 0 ) {
            $model = Auth::user();
        }

        if ( Auth::user()->user_type == 1 ) {
            $model = Profile::where( 'user_id', Auth::user()->id )->firstOrFail();
        }

        for ( $i = 0; count( $request->delete ) > $i; $i ++ ) {
            $model->attachment()->where( 'attachment_id', $request->delete['id'] )->delete();
        }

        return response()->json();
    }

    public function sortFiles( Request $request ) {
        foreach ( $request->post() as $item ) {
            DB::table( 'attachments' )->where( 'id', $item['id'] )->update( [ 'sort' => $item['sort'] ] );
        }
    }
}
