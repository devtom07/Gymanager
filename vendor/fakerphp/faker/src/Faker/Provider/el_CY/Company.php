<?php

namespace Faker\Provider\el_CY;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $companySuffix = [
=======
    protected static $companySuffix = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'ΛΤΔ',
        'Δημόσια εταιρεία',
        '& Υιοι',
        '& ΣΙΑ',
<<<<<<< HEAD
    ];

    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    ];
=======
    );

    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
