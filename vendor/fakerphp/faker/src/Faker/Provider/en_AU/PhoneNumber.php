<?php

namespace Faker\Provider\en_AU;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        // Local calls
        '#### ####',
        '####-####',
        '####.####',
        '########',

        // National dialing
        '0{{areaCode}} #### ####',
        '0{{areaCode}}-####-####',
        '0{{areaCode}}.####.####',
        '0{{areaCode}}########',

        // Optional parenthesis
        '(0{{areaCode}}) #### ####',
        '(0{{areaCode}})-####-####',
        '(0{{areaCode}}).####.####',
        '(0{{areaCode}})########',

        // International drops the 0
        '+61 {{areaCode}} #### ####',
        '+61-{{areaCode}}-####-####',
        '+61.{{areaCode}}.####.####',
        '+61{{areaCode}}########',
<<<<<<< HEAD
    ];

    // 04 Mobile telephones (Australia-wide) mostly commonly written 4 - 3 - 3 instead of 2 - 4 - 4
    protected static $mobileFormats = [
=======
    );

    // 04 Mobile telephones (Australia-wide) mostly commonly written 4 - 3 - 3 instead of 2 - 4 - 4
    protected static $mobileFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '04## ### ###',
        '04##-###-###',
        '04##.###.###',
        '+61 4## ### ###',
        '+61-4##-###-###',
        '+61.4##.###.###',
<<<<<<< HEAD
    ];

    protected static $areacodes = [
        '2', '3', '7', '8'
    ];
=======
    );

    protected static $areacodes = array(
        '2', '3', '7', '8'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }

    public static function areaCode()
    {
        return static::numerify(static::randomElement(static::$areacodes));
    }
}
