<?php

namespace Faker\Provider\he_IL;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} את {{lastName}} {{companySuffix}}',
        '{{lastName}} ו{{lastName}}'
    ];

    protected static $companySuffix = ['בע"מ', 'ובניו', 'סוכנויות', 'משווקים'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} את {{lastName}} {{companySuffix}}',
        '{{lastName}} ו{{lastName}}'
    );

    protected static $companySuffix = array('בע"מ', 'ובניו', 'סוכנויות', 'משווקים');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
