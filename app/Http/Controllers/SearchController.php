<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Station;
use Bitrix\Landing\Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller {

    public function searchMetro( Request $request ) {
        if ( $request->ajax() && $request->method( 'POST' ) ) {
            $stations = Station::where( 'name', '=', $request->station )->first();

            return json_encode( [
                'slug'    => $stations->slug ?? 0,
                'name'  => $stations->name ?? '',
                'count' => isset( $stations->profiles ) ? count( $stations->profiles ) : 0
            ] );
        }

        return view( 'search.metro', [
            'heading' => 'Поиск девушек на карте Московского метро'
        ] );
    }

    public function searchMetroResult( $slug ) {
        if ( $slug === '' ) {
            return view( 'search.search_result' );
        }

        $station = Station::where('slug', '=', $slug )->with('profiles')->first();

        // TODO
        return view( 'search.search_result', [
            'heading'  => 'Девушки на станции метро ' . $station->name,
            'profiles' => $station->profiles ?? ''
        ] );
    }

    public function ajaxSearch( Request $request ) {

        if ( $request->ajax() && ! empty( $request->search ) ) {

            $results = DB::table( 'profiles' )
                         ->where( 'active', '=', 1 )
                         ->where( 'id', '=', $request->search )
                         ->orWhere( 'name', 'LIKE', '%' . $request->search . "%" )
                         ->limit( 10 )
                         ->get();

            return json_decode( $results );
        }
    }

}
