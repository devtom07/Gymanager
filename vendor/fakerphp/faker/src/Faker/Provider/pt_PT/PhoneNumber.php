<?php

namespace Faker\Provider\pt_PT;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /*
    * @link http://en.wikipedia.org/wiki/Telephone_numbers_in_Portugal
    */
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+351 91#######',
        '+351 92#######',
        '+351 93#######',
        '+351 96#######',
        '+351 21#######',
        '+351 22#######',
        '+351 23#######',
        '+351 24#######',
        '+351 25#######',
        '+351 26#######',
        '+351 27#######',
        '+351 28#######',
        '+351 29#######',
        '91#######',
        '92#######',
        '93#######',
        '96#######',
        '21#######',
        '22#######',
        '23#######',
        '24#######',
        '25#######',
        '26#######',
        '27#######',
        '28#######',
        '29#######',
<<<<<<< HEAD
    ];

    protected static $mobileNumberPrefixes = [
=======
    );

    protected static $mobileNumberPrefixes = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '91#######',
        '92#######',
        '93#######',
        '96#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileNumberPrefixes));
    }
}
