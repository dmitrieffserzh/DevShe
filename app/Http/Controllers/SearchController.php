<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller {

    private $request = '';


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
