<?php

namespace Faker\Provider\en_IN;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+91 ## ########',
        '+91 ### #######',
        '0## ########',
        '0### #######'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * An array of en_IN mobile (cell) phone number formats
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
=======
    protected static $mobileFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+91 9#########',
        '+91 8#########',
        '+91 7#########',
        '09#########',
        '08#########',
        '07#########'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Return a en_IN mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
