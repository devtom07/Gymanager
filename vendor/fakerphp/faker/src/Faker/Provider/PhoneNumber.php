<?php

namespace Faker\Provider;

use Faker\Calculator\Luhn;

class PhoneNumber extends Base
{
<<<<<<< HEAD
    protected static $formats = ['###-###-###'];
=======
    protected static $formats = array('###-###-###');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example '555-123-546'
     */
    public function phoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    /**
     * @example +27113456789
     * @return string
     */
    public function e164PhoneNumber()
    {
<<<<<<< HEAD
        $formats = ['+%############'];
=======
        $formats = array('+%############');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        return static::numerify($this->generator->parse(static::randomElement($formats)));
    }

    /**
     * International Mobile Equipment Identity (IMEI)
     *
     * @link http://en.wikipedia.org/wiki/International_Mobile_Station_Equipment_Identity
     * @link http://imei-number.com/imei-validation-check/
     * @example '720084494799532'
     * @return int $imei
     */
    public function imei()
    {
        $imei = (string) static::numerify('##############');
        $imei .= Luhn::computeCheckDigit($imei);
        return $imei;
    }
}
