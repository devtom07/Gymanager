<?php

namespace Faker\Provider\fr_CH;

class Company extends \Faker\Provider\fr_FR\Company
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

    protected static $companySuffix = ['AG', 'Sàrl', 'SA', 'GmbH'];
=======
    );

    protected static $companySuffix = array('AG', 'Sàrl', 'SA', 'GmbH');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
