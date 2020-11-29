<?php

namespace Faker\Provider\hu_HU;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('Kft', 'és Tsa', 'Kht', 'ZRT', 'NyRT', 'BT');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
