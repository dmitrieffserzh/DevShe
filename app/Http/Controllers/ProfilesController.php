<?php

namespace App\Http\Controllers;

use App\Models\Rate;
use Illuminate\Http\Request;

class ProfilesController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {

        return view( 'profiles.index', [ 'heading' => 'Личные данные' ] );
    }

    public function rates() {
        return view( 'profiles.rates', [ 'heading' => 'Тарифы и реклама', 'rates' => Rate::all()] );
    }

    public function payments() {
        return view( 'profiles.index', [ 'heading' => 'Оплата' ] );
    }
}
