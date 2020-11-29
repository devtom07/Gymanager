<?php

namespace Faker\Provider\fr_BE;

class Company extends \Faker\Provider\fr_FR\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['ASBL', 'SCS', 'SNC', 'SPRL', 'Associations', 'Entreprise individuelle', 'GEIE', 'GIE', 'SA', 'SCA', 'SCRI', 'SCRL'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('ASBL', 'SCS', 'SNC', 'SPRL', 'Associations', 'Entreprise individuelle', 'GEIE', 'GIE', 'SA', 'SCA', 'SCRI', 'SCRL');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
