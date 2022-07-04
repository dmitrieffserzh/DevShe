<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Station;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller {


    public function searchMetro () {
        return view('search.metro', [
            'heading' => 'Поиск девушек на карте Московского метро'
            ]);
    }

    public function searchMetroResult (Request $request, $id) {

        if($request->ajax()) {
            $stations = Station::where('name', '=', $request->station )->first();

            return json_decode($stations->id);
        }

        $station = Station::findOrFail($id);
        $station->load('profiles');
        if($station){
            return view('search.search_result', ['profiles' => $station->profiles]);
        }

        return view('search.metro', [
            'heading' => 'Поиск девушек на карте Московского метро',
            'profiles' => $station->profiles
        ]);
    }

    public function ajaxSearch (Request $request) {

        if($request->ajax() && !empty($request->search)) {

            $results = DB::table('profiles')
                ->where('active', '=', 1)
                ->where('id', '=', $request->search)
                ->orWhere('name','LIKE','%'.$request->search."%")
                ->limit(10)
                ->get();

            return json_decode($results);
        }
    }

}
