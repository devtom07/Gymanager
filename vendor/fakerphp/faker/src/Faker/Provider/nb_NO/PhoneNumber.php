<?php

namespace Faker\Provider\nb_NO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
<<<<<<< HEAD
     * @var array Norwegian phone number formats
     */
    protected static $formats = [
=======
    * @var array Norwegian phone number formats
    */
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+47#########',
        '+47 ## ## ## ##',
        '## ## ## ##',
        '## ## ## ##',
        '########',
        '########',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Norweign mobile number formats
     */
<<<<<<< HEAD
    protected static $mobileFormats = [
=======
    protected static $mobileFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+474#######',
        '+479#######',
        '9## ## ###',
        '4## ## ###',
        '9#######',
        '4#######',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public function mobileNumber()
    {
        $format = static::randomElement(static::$mobileFormats);

        return self::numerify($this->generator->parse($format));
    }
}
