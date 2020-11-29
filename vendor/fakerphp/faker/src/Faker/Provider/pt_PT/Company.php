<?php

namespace Faker\Provider\pt_PT;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} {{lastName}} {{companySuffix}}',
        'Grupo {{lastName}} {{companySuffix}}'
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['e Filhos', 'e Associados', 'Lda.', 'S.A.'];
=======
    );

    protected static $companySuffix = array('e Filhos', 'e Associados', 'Lda.', 'S.A.');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
