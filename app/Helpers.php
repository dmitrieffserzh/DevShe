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
            0 => '-Выберите типаж-',
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

    public static function getGirlSectionPrefix() {
        return [
            0 => '',
            1 => 'Элитная девушка ',
            2 => 'Девушка индивидуалка ',
            3 => 'Дешевая девушка ',
            4 => 'БДСМ девушка ',
            5 => 'Массажистка '
        ];
    }

    public static function getGirlSectionUrl() {
        return [
            //0 => '',
            1 => 'elite',
            2 => 'individuals',
            3 => 'cheap',
            4 => 'bdsm',
            5 => 'masseuses'
        ];
    }


    public static function getGirlSectionUrlValue( $key ) {
        $values = self::getGirlSectionUrl();

        return $values[ $key ];
    }

    public static function getGirlAgeValue( $key ) {
        $values = self::getGirlAge();
        return $values[ $key ];
    }

    public static function getGirlBreastValue( $key ) {
        $values = self::getGirlBreast();

        return $values[ $key ];
    }

    public static function getGirlAppearanceValue( $key ) {
        $values = self::getGirlAppearance();

        return $values[ $key ];
    }

    public static function getGirlHaircutValue( $key ) {
        $values = self::getGirlHaircut();

        return $values[ $key ];
    }

    public static function getGirlHaircolorValue( $key ) {
        $values = self::getGirlHaircolor();

        return $values[ $key ];
    }

    public static function getGirlSectionValue( $key ) {
        $values = self::getGirlSection();

        return $values[ $key ];
    }

    public static function getGirlSectionPrefixValue( $key ) {
        $values = self::getGirlSectionPrefix();

        return $values[ $key ];
    }

    public static function getPhoneFormatLink( $number ) {
        return preg_replace( '/[\s()-]/', '', $number );
    }
}
