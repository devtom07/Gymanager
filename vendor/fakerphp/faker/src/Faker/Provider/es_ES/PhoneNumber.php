<?php

namespace Faker\Provider\es_ES;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+34 9## ## ####',
        '+34 9## ######',
        '+34 9########',
        '+34 9##-##-####',
        '+34 9##-######',
        '9## ## ####',
        '9## ######',
        '9########',
        '9##-##-####',
        '9##-######',
<<<<<<< HEAD
    ];

    protected static $mobileFormats = [
=======
    );

    protected static $mobileFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+34 6## ## ####',
        '+34 6## ######',
        '+34 6########',
        '+34 6##-##-####',
        '+34 6##-######',
        '6## ## ####',
        '6## ######',
        '6########',
        '6##-##-####',
        '6##-######',
<<<<<<< HEAD
    ];

    protected static $tollFreeFormats = [
        '900 ### ###',
        '800 ### ###',
    ];
=======
    );

    protected static $tollFreeFormats = array(
        '900 ### ###',
        '800 ### ###',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
