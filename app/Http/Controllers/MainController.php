<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {

        /*
        $test = Profile::find(1);
        $test2 = $test->fields->find(1);
        $test3 = $test2->servicesField->services;
       $test = Service::all() ->load('ServicesField.field')
        dd($test3);
        */
        $test = DB::table('services')
            ->join('services_field', 'services.id', '=', 'services_field.service_id')
            ->join('fields', 'services_field.id', '=', 'fields.field_id')
            ->select('services.name as block_title', 'services_field.name', 'fields.description')
            ->get();
        dd($test);
        return view( 'in_dev' );
    }
}
