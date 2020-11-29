<?php

namespace Faker\Provider\el_GR;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://en.wikipedia.org/wiki/Telephone_numbers_in_Greece
     */
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        // International formats
        '+30 2# ########',
        '+30 2## #######',
        '+30 2### ######',
        '+302#########',

        '+3069########',
        '+30 69 ########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard format
        '2#########',
        '2## #######',
        '2### ######',

        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
<<<<<<< HEAD
    ];

    protected static $mobileFormats = [
=======
    );

    protected static $mobileFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        // International formats
        '+3069########',
        '+30 69########',
        '+30 69# #######',
        '+30 69# ### ####',
        '+30 69# #### ###',
        '+30 69## ######',
        '+30 69## ## ## ##',
        '+30 69## ### ###',

        // Standard formats
        '69########',
        '69# #######',
        '69# ### ####',
        '69# #### ###',
        '69## ######',
        '69## ## ## ##',
        '69## ### ###',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function mobilePhoneNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

<<<<<<< HEAD
    protected static $tollFreeFormats = [
=======
    protected static $tollFreeFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        // International formats
        '+30 800#######',
        '+30 800 #######',
        '+30 800 ## #####',
        '+30 800 ### ####',

        // Standard formats
        '800#######',
        '800 #######',
        '800 ## #####',
        '800 ### ####',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
