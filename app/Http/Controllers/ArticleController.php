<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ArticleController extends Controller {
    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {

        return view( 'main', [] );
    }
}
