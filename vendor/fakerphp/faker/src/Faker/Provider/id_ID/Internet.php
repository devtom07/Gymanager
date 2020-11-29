<?php

namespace Faker\Provider\id_ID;

class Internet extends \Faker\Provider\Internet
{
    /**
     * @var array some email domains
     */
<<<<<<< HEAD
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'gmail.co.id', 'yahoo.co.id',
    ];
=======
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'gmail.co.id', 'yahoo.co.id',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * General tld and local tld
     *
     * @link http://idwebhost.com/
     * @link http://domain.id/
     */
<<<<<<< HEAD
    protected static $tld = [
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id', 'id',
    ];
=======
    protected static $tld = array(
        'com', 'net', 'org', 'asia', 'tv', 'biz', 'info', 'in', 'name', 'co',
        'ac.id', 'sch.id', 'go.id', 'mil.id', 'co.id', 'or.id', 'web.id',
        'my.id', 'biz.id', 'desa.id', 'id',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
