<?php

namespace Faker\Provider\hr_HR;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{firstName}}',
    ];

    protected static $companySuffix = [
        'd.o.o.', 'j.d.o.o.', 'Security'
    ];

    protected static $companyPrefix = [
        'Autoškola', 'Cvjećarnica', 'Informatički obrt', 'Kamenorezački obrt', 'Kladionice', 'Market', 'Mesnica', 'Prijevoznički obrt', 'Suvenirnica', 'Turistička agencija', 'Voćarna'
    ];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{firstName}}',
    );

    protected static $companySuffix = array(
        'd.o.o.', 'j.d.o.o.', 'Security'
    );

    protected static $companyPrefix = array(
        'Autoškola', 'Cvjećarnica', 'Informatički obrt', 'Kamenorezački obrt', 'Kladionice', 'Market', 'Mesnica', 'Prijevoznički obrt', 'Suvenirnica', 'Turistička agencija', 'Voćarna'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }
}
