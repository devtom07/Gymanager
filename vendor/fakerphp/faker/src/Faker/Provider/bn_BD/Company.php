<?php

namespace Faker\Provider\bn_BD;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{companyName}} {{companyType}}'
    ];

    protected static $names = [
        'রহিম', 'করিম', 'বাবলু'
    ];

    protected static $types = [
        'সিমেন্ট', 'সার', 'ঢেউটিন'
    ];
=======
    protected static $formats = array(
        '{{companyName}} {{companyType}}'
    );

    protected static $names = array(
        'রহিম', 'করিম', 'বাবলু'
    );

    protected static $types = array(
        'সিমেন্ট', 'সার', 'ঢেউটিন'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function companyType()
    {
        return static::randomElement(static::$types);
    }

    public static function companyName()
    {
        return static::randomElement(static::$names);
    }
}
