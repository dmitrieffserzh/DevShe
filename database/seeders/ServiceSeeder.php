<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder {

    public function run() {

        $services = [
            'Секс',
            'Экстрим',
            'Массаж',
            'Садо-Мазо',
            'Стриптиз',
            'Разное',
        ];

        for ( $i = 0; count( $services ) > $i; $i ++ ) {
            DB::table( 'services' )->insert( [ 'name' => $services[ $i ] ] );
        }


        // NEXT STEP
        $serviceField = [
            // Секс
            [ 'service_id' => 1, 'name' => 'Секс клаcсический', 'sort' => 1 ],
            [ 'service_id' => 1, 'name' => 'Секс анальный', 'sort' => 2 ],
            [ 'service_id' => 1, 'name' => 'Секс групповой', 'sort' => 3 ],
            [ 'service_id' => 1, 'name' => 'Секс лесбийский', 'sort' => 4 ],
            [ 'service_id' => 1, 'name' => 'Услуги семейной паре', 'sort' => 5 ],
            [ 'service_id' => 1, 'name' => 'Минет в резинке', 'sort' => 6 ],
            [ 'service_id' => 1, 'name' => 'Минет без резинки', 'sort' => 7 ],
            [ 'service_id' => 1, 'name' => 'Минет глубокий', 'sort' => 8 ],
            [ 'service_id' => 1, 'name' => 'Минет горловой', 'sort' => 9 ],
            [ 'service_id' => 1, 'name' => 'Куннилингус', 'sort' => 10 ],
            [ 'service_id' => 1, 'name' => 'Целуюсь', 'sort' => 11 ],
            [ 'service_id' => 1, 'name' => 'Игрушки', 'sort' => 12 ],
            [ 'service_id' => 1, 'name' => 'Окончание на грудь', 'sort' => 13 ],
            [ 'service_id' => 1, 'name' => 'Окончание на лицо', 'sort' => 14 ],
            [ 'service_id' => 1, 'name' => 'Окончание в рот', 'sort' => 15 ],
            [ 'service_id' => 1, 'name' => 'Поза 69', 'sort' => 16 ],

            // Экстрим
            [ 'service_id' => 2, 'name' => 'Страпон', 'sort' => 1 ],
            [ 'service_id' => 2, 'name' => 'Анилингус клиенту', 'sort' => 2 ],
            [ 'service_id' => 2, 'name' => 'Анилингус мне', 'sort' => 3 ],
            [ 'service_id' => 2, 'name' => 'Золотой дождь клиенту', 'sort' => 4 ],
            [ 'service_id' => 2, 'name' => 'Золотой дождь мне', 'sort' => 5 ],
            [ 'service_id' => 2, 'name' => 'Фистинг анальный клиенту', 'sort' => 6 ],

            // Массаж
            [ 'service_id' => 3, 'name' => 'Классический', 'sort' => 1 ],
            [ 'service_id' => 3, 'name' => 'Расслабляющий', 'sort' => 2 ],
            [ 'service_id' => 3, 'name' => 'Эротический', 'sort' => 3 ],
            [ 'service_id' => 3, 'name' => 'Урологический', 'sort' => 4 ],
            [ 'service_id' => 3, 'name' => 'Профессиональный', 'sort' => 5 ],
            [ 'service_id' => 3, 'name' => 'Услуги семейной паре', 'sort' => 6 ],

            // Садо-Мазо
            [ 'service_id' => 4, 'name' => 'Госпожа', 'sort' => 1 ],
            [ 'service_id' => 4, 'name' => 'Доминация', 'sort' => 2 ],
            [ 'service_id' => 4, 'name' => 'Рабыня', 'sort' => 3 ],
            [ 'service_id' => 4, 'name' => 'Подчинение', 'sort' => 4 ],
            [ 'service_id' => 4, 'name' => 'Порка', 'sort' => 5 ],
            [ 'service_id' => 4, 'name' => 'Фетиш', 'sort' => 6 ],

            // Стриптиз
            [ 'service_id' => 5, 'name' => 'Стриптиз не профи', 'sort' => 1 ],
            [ 'service_id' => 5, 'name' => 'Лесби откровенное', 'sort' => 2 ],
            [ 'service_id' => 5, 'name' => 'Лесби-шоу легкое', 'sort' => 3 ],
            [ 'service_id' => 5, 'name' => 'Подчинение', 'sort' => 4 ],

            // Разное
            [ 'service_id' => 6, 'name' => 'Сопровождение', 'sort' => 1 ],
            [ 'service_id' => 6, 'name' => 'Ролевые игры', 'sort' => 2 ],
            [ 'service_id' => 6, 'name' => 'GFE', 'sort' => 3 ],
        ];

        for ( $i = 0; count( $serviceField ) > $i; $i ++ ) {
            DB::table( 'services_field' )->insert(
                [
                    'service_id' => $serviceField[ $i ]['service_id'],
                    'name'       => $serviceField[ $i ]['name'],
                    'sort'       => $serviceField[ $i ]['sort'],
                ]
            );
        }
    }
}
