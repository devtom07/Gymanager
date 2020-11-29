<?php

namespace Faker\Provider\ka_GE;

class DateTime extends \Faker\Provider\DateTime
{
    public static function dayOfWeek($max = 'now')
    {
<<<<<<< HEAD
        $map = [
=======
        $map = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            'Sunday' => 'კვირა',
            'Monday' => 'ორშაბათი',
            'Tuesday' => 'სამშაბათი',
            'Wednesday' => 'ოთხშაბათი',
            'Thursday' => 'ხუთშაბათი',
            'Friday' => 'პარასკევი',
            'Saturday' => 'შაბათი',
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
            'January' => 'იანვარი',
            'February' => 'თებერვალი',
            'March' => 'მარტი',
            'April' => 'აპრილი',
            'May' => 'მაისი',
            'June' => 'ივნისი',
            'July' => 'ივლისი',
            'August' => 'აგვისტო',
            'September' => 'სექტემბერი',
            'October' => 'ოქტომბერი',
            'November' => 'ნოემბერი',
            'December' => 'დეკემბერი',
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
