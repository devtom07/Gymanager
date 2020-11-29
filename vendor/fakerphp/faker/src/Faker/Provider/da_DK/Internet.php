<?php

namespace Faker\Provider\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array Some safe email TLD.
     */
<<<<<<< HEAD
    protected static $safeEmailTld = [
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    ];
=======
    protected static $safeEmailTld = array(
        'org', 'com', 'net', 'dk', 'dk', 'dk',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Some email domains in Denmark.
     */
<<<<<<< HEAD
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk'
    ];
=======
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'yahoo.dk', 'hotmail.com', 'hotmail.dk', 'mail.dk', 'live.dk'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Some TLD.
     */
<<<<<<< HEAD
    protected static $tld = [
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    ];
=======
    protected static $tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'dk', 'dk', 'dk',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
