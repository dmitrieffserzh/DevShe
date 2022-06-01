<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {

        $profile = Profile::find(1);
        dd($profile->stations);


//        $test = DB::table('services')
//            ->join('services_field', 'services.id', '=', 'services_field.service_id')
//            ->leftJoin('fields', 'services_field.id', '=', 'fields.field_id')
//            ->select('services.name as block_title', 'services_field.name', 'fields.id', 'fields.description')
//            ->orderBy('services.id')
//            ->get();

        return view( 'main' , [
            'test' => $test
        ]);
    }
}
