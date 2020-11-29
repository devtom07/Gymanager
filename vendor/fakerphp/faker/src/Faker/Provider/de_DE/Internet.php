<?php

namespace Faker\Provider\de_DE;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @link https://www.statista.com/statistics/446418/most-popular-e-mail-providers-germany/
     * @link http://blog.shuttlecloud.com/the-10-most-popular-email-providers-in-germany
     */
<<<<<<< HEAD
    protected static $freeEmailDomain = [
=======
    protected static $freeEmailDomain = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'web.de',
        'gmail.com',
        'hotmail.de',
        'yahoo.de',
        'googlemail.com',
        'aol.de',
        'gmx.de',
        'freenet.de',
        'posteo.de',
        'mail.de',
        'live.de',
        't-online.de'
<<<<<<< HEAD
    ];
    protected static $tld = ['com', 'com', 'com', 'net', 'org', 'de', 'de', 'de'];
=======
    );
    protected static $tld = array('com', 'com', 'com', 'net', 'org', 'de', 'de', 'de');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
