<?php

namespace Faker\Provider\ja_JP;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{companyPrefix}} {{lastName}}'
    ];

    protected static $companyPrefix = ['株式会社', '有限会社'];
=======
    protected static $formats = array(
        '{{companyPrefix}} {{lastName}}'
    );

    protected static $companyPrefix = array('株式会社', '有限会社');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
