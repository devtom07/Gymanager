<?php

namespace Faker\Provider\nl_BE;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    ];

    protected static $companySuffix = ['VZW', 'Comm.V', 'VOF', 'BVBA', 'EBVBA', 'ESV', 'NV', 'Comm.VA', 'CVOA', 'CVBA', '& Zonen', '& Zn'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}',
    );

    protected static $companySuffix = array('VZW', 'Comm.V', 'VOF', 'BVBA', 'EBVBA', 'ESV', 'NV', 'Comm.VA', 'CVOA', 'CVBA', '& Zonen', '& Zn');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
