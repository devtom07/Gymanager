<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
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
    protected static $companySuffix = ['ehf.', 'hf.', 'sf.'];
=======
    protected static $companySuffix = array('ehf.', 'hf.', 'sf.');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @link http://www.rsk.is/atvinnurekstur/virdisaukaskattur/
     *
     * @var string VSK number format.
     */
    protected static $vskFormat = '%####';

    /**
     * Generates a VSK number (5 digits).
     *
     * @return string
     */
    public static function vsk()
    {
        return static::numerify(static::$vskFormat);
    }
}
