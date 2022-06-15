<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {

        return view( 'profiles.index', [ 'heading' => 'Личные данные' ] );
    }

    public function rates() {
        return view( 'profiles.index', [ 'heading' => 'Тарифы и реклама' ] );
    }

    public function payments() {
        return view( 'profiles.index', [ 'heading' => 'Оплата' ] );
    }
}
