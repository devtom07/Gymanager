<?php

namespace Faker\Provider\bn_BD;

class Utils
{
    public static function getBanglaNumber($number)
    {
        $english = range(0, 10);
<<<<<<< HEAD
        $bangla = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
=======
        $bangla = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

        return str_replace($english, $bangla, $number);
    }
}
