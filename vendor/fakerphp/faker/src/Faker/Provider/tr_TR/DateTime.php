<?php

namespace Faker\Provider\tr_TR;

class DateTime extends \Faker\Provider\DateTime
{
    public static function amPm($max = 'now')
    {
        return static::dateTime($max)->format('a') === 'am' ? 'öö' : 'ös';
    }

    public static function dayOfWeek($max = 'now')
    {
<<<<<<< HEAD
        $map = [
=======
        $map = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            'Sunday' => 'Pazar',
            'Monday' => 'Pazartesi',
            'Tuesday' => 'Salı',
            'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe',
            'Friday' => 'Cuma',
            'Saturday' => 'Cumartesi',
<<<<<<< HEAD
        ];
        $week = static::dateTime($max)->format('l');
        return $map[$week] ?? $week;
=======
        );
        $week = static::dateTime($max)->format('l');
        return isset($map[$week]) ? $map[$week] : $week;
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    }

    public static function monthName($max = 'now')
    {
<<<<<<< HEAD
        $map = [
=======
        $map = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            'January' => 'Ocak',
            'February' => 'Şubat',
            'March' => 'Mart',
            'April' => 'Nisan',
            'May' => 'Mayıs',
            'June' => 'Haziran',
            'July' => 'Temmuz',
            'August' => 'Ağustos',
            'September' => 'Eylül',
            'October' => 'Ekim',
            'November' => 'Kasım',
            'December' => 'Aralık',
<<<<<<< HEAD
        ];
        $month = static::dateTime($max)->format('F');
        return $map[$month] ?? $month;
=======
        );
        $month = static::dateTime($max)->format('F');
        return isset($map[$month]) ? $map[$month] : $month;
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    }
}
