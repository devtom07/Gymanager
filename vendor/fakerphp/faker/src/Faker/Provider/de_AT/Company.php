<?php

namespace Faker\Provider\de_AT;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['AG', 'EWIV', 'Ges.m.b.H.', 'GmbH', 'KEG', 'KG', 'OEG', 'OG', 'OHG', 'SE'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('AG', 'EWIV', 'Ges.m.b.H.', 'GmbH', 'KEG', 'KG', 'OEG', 'OG', 'OHG', 'SE');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
