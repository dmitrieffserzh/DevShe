<?php

namespace App;

class Helpers {

    //LISTS
    public static function getGirlAge() {
        return [
            18,
            19,
            20,
            21,
            22,
            23,
            24,
            25,
            26,
            27,
            28,
            29,
            30,
            31,
            32,
            33,
            34,
            35,
            36,
            37,
            38,
            39,
            40,
            41,
            42,
            43,
            44,
            45,
            46,
            47,
            48,
            49,
            50,
            51,
            52,
            53,
            54,
            55,
            56,
            57,
            58,
            59,
            60,
            61,
            62,
            63,
            64,
            65
        ];
    }

    public static function getGirlBreast() {
        return [
            1,
            1.5,
            2,
            2.5,
            3,
            3.5,
            4,
            4.5,
            5,
            5.5,
            6,
            6.5
        ];
    }

    public static function getGirlAppearance() {
        return [
            0 => 'Не выбрано',
            1 => 'Славянская',
            2 => 'Азиатская',
            3 => 'Кавказская',
            4 => 'Восточная'
        ];
    }

    public static function getGirlHaircut() {
        return [
            0 => 'Не выбрано',
            1 => 'Частичная депиляция',
            2 => 'Полная депиляция',
        ];
    }

    public static function getGirlHaircolor() {
        return [
            0 => 'Не выбрано',
            1 => 'Блондинка',
            2 => 'Шатенка',
            3 => 'Брюнетка',
            4 => 'Рыжая',
            5 => 'Русая',
        ];
    }

    public static function getGirlSection() {
        return [
            0 => 'Не выбрано',
            1 => 'Элитные',
            2 => 'Индивидуалки',
            3 => 'Дешевые',
            4 => 'БДСМ',
            5 => 'Массажистки'
        ];
    }

    public static function getGirlSectionValue($key) {
        $values = self::getGirlSection();
        return $values[$key];
    }
}
