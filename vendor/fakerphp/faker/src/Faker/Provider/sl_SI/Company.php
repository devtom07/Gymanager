<?php

namespace Faker\Provider\sl_SI;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{firstName}} {{lastName}} s.p.',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} in {{lastName}} {{companySuffix}}',
    ];

    protected static $companySuffix = ['d.o.o.', 'd.d.', 'k.d.', 'k.d.d.','d.n.o.','so.p.'];
=======
    protected static $formats = array(
        '{{firstName}} {{lastName}} s.p.',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}, {{lastName}} in {{lastName}} {{companySuffix}}',
    );

    protected static $companySuffix = array('d.o.o.', 'd.d.', 'k.d.', 'k.d.d.','d.n.o.','so.p.');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
