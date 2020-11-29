<?php

namespace Faker\Provider\it_CH;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        '{{lastName}}',
        '{{lastName}}',
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['SA', 'Sarl'];
=======
    );

    protected static $companySuffix = array('SA', 'Sarl');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
