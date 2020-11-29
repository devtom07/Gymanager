<?php

namespace Faker\Provider\el_CY;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+3572#######',
        '+3579#######',
        '2#######',
        '9#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * An array of el_CY mobile (cell) phone number formats.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
        '9#######',
    ];
=======
    protected static $mobileFormats = array(
        '9#######',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Return a el_CY mobile phone number.
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
