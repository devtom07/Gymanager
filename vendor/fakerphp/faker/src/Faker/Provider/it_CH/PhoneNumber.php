<?php

namespace Faker\Provider\it_CH;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+41 (0)## ### ## ##',
        '+41(0)#########',
        '+41 ## ### ## ##',
        '0#########',
        '0## ### ## ##',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * An array of Swiss mobile (cell) phone number formats.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
=======
    protected static $mobileFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        // Local
        '075 ### ## ##',
        '075#######',
        '076 ### ## ##',
        '076#######',
        '077 ### ## ##',
        '077#######',
        '078 ### ## ##',
        '078#######',
        '079 ### ## ##',
        '079#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Return a Swiss mobile phone number.
     *
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
