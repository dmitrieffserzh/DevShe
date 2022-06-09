<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MainController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {


        return view( 'main' , [
        ]);
    }
}
