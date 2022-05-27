<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Models\Service;
use Illuminate\Http\Request;

class MainController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {

        /*
        $test = Profile::find(1);
        $test2 = $test->fields->find(1);
        $test3 = $test2->servicesField->services;
        dd($test3);
        */
        $test = Service::all()->load('ServicesField.field');
        dd($test);
        return view( 'in_dev' );
    }
}
