<?php

namespace Faker\Provider\da_DK;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class Company extends \Faker\Provider\Company
{
    /**
     * @var array Danish company name formats.
     */
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{firstname}} {{lastName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{middleName}} {{companySuffix}}',
        '{{firstname}} {{middleName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{lastName}} & {{lastName}} {{companySuffix}}',
        '{{lastName}} og {{lastName}} {{companySuffix}}',
        '{{middleName}} & {{middleName}} {{companySuffix}}',
        '{{middleName}} og {{middleName}} {{companySuffix}}',
        '{{middleName}} & {{lastName}}',
        '{{middleName}} og {{lastName}}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Company suffixes.
     */
<<<<<<< HEAD
    protected static $companySuffix = ['ApS', 'A/S', 'I/S', 'K/S'];
=======
    protected static $companySuffix = array('ApS', 'A/S', 'I/S', 'K/S');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @link http://cvr.dk/Site/Forms/CMS/DisplayPage.aspx?pageid=60
     *
     * @var string CVR number format.
     */
    protected static $cvrFormat = '%#######';

    /**
     * @link http://cvr.dk/Site/Forms/CMS/DisplayPage.aspx?pageid=60
     *
     * @var string P number (production number) format.
     */
    protected static $pFormat = '%#########';

    /**
     * Generates a CVR number (8 digits).
     *
     * @return string
     */
    public static function cvr()
    {
        return static::numerify(static::$cvrFormat);
    }

    /**
     * Generates a P entity number (10 digits).
     *
     * @return string
     */
    public static function p()
    {
        return static::numerify(static::$pFormat);
    }
}
