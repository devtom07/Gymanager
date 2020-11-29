<?php

namespace Faker\Provider\lt_LT;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{companySuffix}} {{lastNameMale}}',
        '{{companySuffix}} {{lastNameMale}} ir {{lastNameMale}}',
        '{{companySuffix}} "{{lastNameMale}} ir {{lastNameMale}}"',
        '{{companySuffix}} "{{lastNameMale}}"',
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['UAB', 'AB', 'IĮ', 'MB', 'VŠĮ'];
=======
    );

    protected static $companySuffix = array('UAB', 'AB', 'IĮ', 'MB', 'VŠĮ');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
