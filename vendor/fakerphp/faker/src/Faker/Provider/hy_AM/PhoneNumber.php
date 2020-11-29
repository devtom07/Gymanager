<?php

namespace Faker\Provider\hy_AM;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
<<<<<<< HEAD
    protected static $codes = [91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49];

    protected static $numberFormats = [
        '######',
        '##-##-##',
        '###-###',
    ];

    protected static $formats = [
=======
    protected static $codes = array(91, 96, 99, 43, 77, 93, 94, 98, 97, 77, 55, 95, 41, 49);

    protected static $numberFormats = array(
        '######',
        '##-##-##',
        '###-###',
    );

    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '0{{code}} {{numberFormat}}',
        '(0{{code}}) {{numberFormat}}',
        '+374{{code}} {{numberFormat}}',
        '+374 {{code}} {{numberFormat}}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public function phoneNumber()
    {
        return static::numerify($this->generator->parse(static::randomElement(static::$formats)));
    }

    public function code()
    {
        return static::randomElement(static::$codes);
    }

    /**
     * @return mixed
     */
    public function numberFormat()
    {
        return static::randomElement(static::$numberFormats);
    }
}
