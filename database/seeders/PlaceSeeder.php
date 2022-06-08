<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder {

    public function run() {
        $places = [
            1 => 'Квартиры',
            2 => 'Гостиницы',
            3 => 'Сауны',
            4 => 'Офисы',
            5 => 'Апартаменты',
            6 => 'За город МО',
        ];

        for ( $i = 1; count( $places ) >= $i; $i ++ ) {
            DB::table( 'places' )->insert( [ 'name' => $places[ $i ] ] );
        }
    }
}
