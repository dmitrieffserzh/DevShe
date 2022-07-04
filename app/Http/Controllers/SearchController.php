<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Station;
use Bitrix\Landing\Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller {

    public function searchMetro( Request $request ) {
        if ( $request->ajax() && $request->method( 'post' ) ) {

            $stations = Station::where( 'name', '=', $request->station )->first();

            return json_decode( $stations->id );
        }

        return view( 'search.metro', [
            'heading' => 'Поиск девушек на карте Московского метро'
        ] );
    }

    public function searchMetroResult( $id ) {
        $station = Station::find( $id );
        $station->load( 'profiles' );

        return view( 'search.search_result', [ 'profiles' => $station->profiles ?? '' ] );


        //Error(404);
//        return view('search.metro', [
//            'heading' => 'Поиск девушек на карте Московского метро',
//            'profiles' => $station->profiles
//        ]);
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
