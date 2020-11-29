<?php

namespace Faker\Provider\ne_NP;

class Internet extends \Faker\Provider\Internet
{
<<<<<<< HEAD
    protected static $freeEmailDomain = ['gmail.com', 'yahoo.com', 'hotmail.com'];
    protected static $tld = ['com', 'com', 'com', 'net', 'org'];

    protected static $emailFormats = [
=======
    protected static $freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static $tld = array('com', 'com', 'com', 'net', 'org');

    protected static $emailFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
        '{{userName}}@{{domainName}}.np',
        '{{userName}}@{{domainName}}.np',
        '{{userName}}@{{domainName}}.np',
<<<<<<< HEAD
    ];

    protected static $urlFormats = [
=======
    );

    protected static $urlFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'http://www.{{domainName}}.np/',
        'http://www.{{domainName}}.np/',
        'http://{{domainName}}.np/',
        'http://{{domainName}}.np/',
        'http://www.{{domainName}}.np/{{slug}}',
        'http://www.{{domainName}}.np/{{slug}}.html',
        'http://{{domainName}}.np/{{slug}}',
        'http://{{domainName}}.np/{{slug}}',
        'http://{{domainName}}/{{slug}}.html',
        'http://www.{{domainName}}/',
        'http://{{domainName}}/',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
