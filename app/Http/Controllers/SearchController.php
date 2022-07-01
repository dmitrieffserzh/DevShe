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

    public function searchMetroResult (Request $request) {
        $stations = Station::where('name', '=', $request->station )->get();
        dd($stations);

        return view('search.metro', [
            'heading' => 'Поиск девушек на карте Московского метро'
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
