<?php

namespace Faker\Provider\en_GB;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+44(0)##########',
        '+44(0)#### ######',
        '+44(0)#########',
        '+44(0)#### #####',
        '0##########',
        '0#########',
        '0#### ######',
        '0#### #####',
        '0### ### ####',
        '0### #######',
        '(0####) ######',
        '(0####) #####',
        '(0###) ### ####',
        '(0###) #######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * An array of en_GB mobile (cell) phone number formats
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
        // Local
        '07#########',
        '07### ######',
        '07### ### ###'
    ];
=======
    protected static $mobileFormats = array(
      // Local
      '07#########',
      '07### ######',
      '07### ### ###'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Return a en_GB mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
