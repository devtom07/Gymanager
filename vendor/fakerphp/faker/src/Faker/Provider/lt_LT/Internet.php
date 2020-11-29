<?php

namespace Faker\Provider\lt_LT;

class Internet extends \Faker\Provider\Internet
{
<<<<<<< HEAD
    protected static $userNameFormats = [
=======
    protected static $userNameFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastNameMale}}.{{firstNameMale}}',
        '{{lastNameFemale}}.{{firstNameFemale}}',
        '{{firstNameMale}}##',
        '{{firstNameFemale}}##',
        '?{{lastNameFemale}}',
        '?{{lastNameMale}}',
<<<<<<< HEAD
    ];

    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com'];
    protected static $tld = ['com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt'];
=======
    );

    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'net', 'org', 'lt', 'lt', 'lt', 'lt', 'lt');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
