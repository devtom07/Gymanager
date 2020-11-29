<?php

namespace Faker\Provider\zh_CN;

class Internet extends \Faker\Provider\Internet
{
<<<<<<< HEAD
    protected static $freeEmailDomain = [
        'gmail.com', 'yahoo.com', 'hotmail.com', '126.com', '163.com', 'qq.com', 'sohu.com', 'sina.com'
    ];
    protected static $tld = [
        'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cn',
        'com.cn', 'edu.cn', 'net.cn', 'biz.cn', 'gov.cn', 'org.cn'
    ];

    protected static $userNameFormats = [
=======
    protected static $freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', '126.com', '163.com', 'qq.com', 'sohu.com', 'sina.com'
    );
    protected static $tld = array(
        'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cn',
        'com.cn', 'edu.cn', 'net.cn', 'biz.cn', 'gov.cn', 'org.cn'
    );

    protected static $userNameFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{word}}.{{word}}',
        '{{word}}_{{word}}',
        '{{word}}##',
        '?{{word}}',
<<<<<<< HEAD
    ];
    protected static $emailFormats = [
        '{{userName}}@{{freeEmailDomain}}',
    ];
=======
    );
    protected static $emailFormats = array(
        '{{userName}}@{{freeEmailDomain}}',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
