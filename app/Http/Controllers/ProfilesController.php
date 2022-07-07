<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Support\Carbon;
use Orchid\Attachment\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }


    private $profile_id = '';

    public function index() {

        $user = Auth::user();
//        $user = $user->load('profile');
//        dd($user);
        if ( $user->user_type == 0 ) {
            return view( 'profiles.edit_man', [
                'profile' => $user
            ] );
        }


        $profile = $user->profile;

        if ( $profile ) {
            $this->profile_id = $profile->id;
        }

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

        $profile = Profile::where( 'user_id', Auth::user()->id )->firstOrFail();

        $profile->updated_at = Carbon::now();

        $profile->update( $request->profile );
        $profile->places()->sync( $request->profile['places'] );

        if ( empty( $request->profile['stations'] ) ) {
            $profile->stations()->detach();
        } else {
            $profile->stations()->sync( $request->profile['stations'] );
        }

        $profile->prices()->update( $request->profile['prices'] );

        //$profile->attachment()->syncWithoutDetaching($request->files, []);

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


//        return view( 'pages.page', [
//            'heading' => 'Профиль успешно сохранен'
//        ] );
    }


    public function rates() {
        return view( 'profiles.rates', [ 'heading' => 'Тарифы и реклама', 'rates' => Rate::all() ] );
    }

    public function payments() {
        return view( 'profiles.index', [ 'heading' => 'Оплата' ] );
    }

    public function uploadFiles( Request $request ) {
        $profile = Profile::where( 'user_id', Auth::user()->id )->firstOrFail();

        $filesRequest = $request->file( 'files' );
        $attachment   = [];
        for ( $i = 0; count( $filesRequest ) > $i; $i ++ ) {
            $files        = new File( $filesRequest[ $i ] );
            $attached     = $profile->attachment()->syncWithoutDetaching( $files->load(), [] );
            $attachment[] = $profile->attachment()->where( 'attachment_id', $attached['attached'][0] )->first();
        }

        return response()->json( $attachment );
    }

    public function deleteFiles( Request $request ) {
        $profile = Profile::where( 'user_id', Auth::user()->id )->firstOrFail();
        for ( $i = 0; count( $request->delete ) > $i; $i ++ ) {
            $profile->attachment()->where( 'attachment_id', $request->delete['id'] )->delete();
        }

        return response()->json();
    }

    public function sortFiles( Request $request ) {
        foreach ( $request->post() as $item ) {
            DB::table( 'attachments' )->where( 'id', $item['id'] )->update( [ 'sort' => $item['sort'] ] );
        }
    }
}
