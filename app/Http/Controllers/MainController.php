<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {

        // GET GIRLS
        $eliteGirls         = Profile::where('section', '=', 1)->limit(8)->get();
        $newGirls           = Profile::where('active', '=', 1)->limit(20)->get();
        $individualGirls    = Profile::where('section', '=', 2)->limit(8)->get();
        $topGirls           = Profile::where('active', '=', 1)->limit(20)->get();
        $cheapGirls         = Profile::where('section', '=', 3)->with('prices')->limit(8)->get()->sortBy('prices.day_one_hour_in');;
        $masseusesGirls     = Profile::where('section', '=', 5)->limit(4)->get();


        return view('main', [
            'eliteGirls'      => $eliteGirls,
            'newGirls' => $newGirls,
            'individualGirls' => $individualGirls,
            'topGirls' => $topGirls,
            'cheapGirls'      => $cheapGirls,
            'masseusesGirls'  => $masseusesGirls
        ]);
    }
}
