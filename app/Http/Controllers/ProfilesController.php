<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    private $profile_id = '';

    public function index()
    {

        $user = Auth::user();

        if ( $user->user_type == 0) {
            return view('profiles.edit_man', [
                'profile' => $user
            ]);
        }

        $profile = $user->profile;

        if($profile) $this->profile_id = $profile->id;

        $services = DB::table('services')
            ->join('services_field', 'services.id', '=', 'services_field.service_id')
            ->leftJoin('fields', function ($join) {
                $join->on('services_field.id', '=', 'fields.field_id')
                    ->where('fields.profile_id', '=', $this->profile_id);
            })
            ->select('services.name as block_title', 'services_field.name', 'services_field.id as service_id', 'fields.id', 'fields.description')
            ->orderBy('services.id')
            ->orderBy('services_field.sort')
            ->get();

        $arrServices = [];
        $tmp = '';
        if (count($services) > 0) {
            $tmp = $services[0]->block_title;
        }
        $servicesList = [];
        foreach ($services as $item) {

            if ($tmp != $item->block_title) {
                array_push($arrServices, ['title' => $tmp, 'services' => $servicesList]);
                $tmp = $item->block_title;
                $servicesList = array();
            }

            array_push($servicesList, [
                'name' => $item->name,
                'description' => $item->description,
                'check' => $item->id ? true : false
            ]);
        }
        array_push($arrServices, ['title' => $item->block_title, 'services' => $servicesList]);


        return view('profiles.edit', [
            'heading' => 'Личные данные',
            'profile' => $profile,
            'services' => $arrServices
        ]);
    }

    public function saveProfile()
    {

        return view('pages.page', [
            'heading' => 'Профиль успешно сохранен'
        ]);
    }


    public function rates()
    {
        return view('profiles.rates', ['heading' => 'Тарифы и реклама', 'rates' => Rate::all()]);
    }

    public function payments()
    {
        return view('profiles.index', ['heading' => 'Оплата']);
    }

    public function uploads(Request $request)
    {
        dd($request->files);
        return;
    }
}
