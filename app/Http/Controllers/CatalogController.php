<?php

namespace App\Http\Controllers;

use App\Helpers;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller {

    private $profile_id = '';

    function showProfileCatalog( $section, $id ) {

        $profile = Profile::where( 'active', 1 )->findOrFail( $id );

        if ( $profile->section != array_search( $section, Helpers::getGirlSectionUrl() ) ) {
            abort( 404 );
        }

        $related = Profile::where( 'active', 1 )->where( 'id', '!=', $profile->id )->where( 'section', $profile->section )->limit( 10 )->get();

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
                'name'        => $item->name,
                'description' => $item->description,
                'check'       => $item->id ? true : false
            ] );
        }
        array_push( $arrServices, [ 'title' => $item->block_title, 'services' => $servicesList ] );

        return view( 'catalog.profile', [
            'heading'  => $profile->name,
            'profile'  => $profile->load( [ 'attachment', 'prices' ] ),
            'related'  => $related->load( 'attachment' ),
            'services' => $arrServices
        ] );
    }

    function showEliteCatalog() {
        $profiles = Profile::where( 'active', 1 )->where( 'section', 1 )->limit( 16 )->get();

        return view( 'catalog.profile_list', [
            'profiles' => $profiles,
            'heading'  => 'Элитные девушки Москвы'
        ] );
    }

    function showIndividualsCatalog() {
        $profiles = Profile::where( 'active', 1 )->where( 'section', 2 )->limit( 16 )->get();

        return view( 'catalog.profile_list', [
            'profiles' => $profiles,
            'heading'  => 'Девшки индивидуалки Москвы'
        ] );
    }


    function showCheapCatalog() {
        $profiles = Profile::where( 'active', 1 )->where( 'section', 3 )->limit( 16 )->get();

        return view( 'catalog.profile_list', [
            'profiles' => $profiles,
            'heading'  => 'Дешевые девушки Москвы'
        ] );
    }


    function showBdsmCatalog() {
        $profiles = Profile::where( 'active', 1 )->where( 'section', 4 )->limit( 16 )->get();

        return view( 'catalog.profile_list', [
            'profiles' => $profiles,
            'heading'  => 'БДСМ девушки Москвы'
        ] );
    }


    function showMasseusesCatalog() {
        $profiles = Profile::where( 'active', 1 )->where( 'section', 5 )->limit( 16 )->get();

        return view( 'catalog.profile_list', [
            'profiles' => $profiles,
            'heading'  => 'Массажистки Москвы'
        ] );
    }
}
