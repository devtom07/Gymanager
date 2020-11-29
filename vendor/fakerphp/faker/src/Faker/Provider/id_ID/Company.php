<?php

namespace Faker\Provider\id_ID;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{companyPrefix}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{lastName}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{lastName}} {{companySuffix}}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
<<<<<<< HEAD
    protected static $companyPrefix = ['PT', 'CV', 'UD', 'PD', 'Perum'];
=======
    protected static $companyPrefix = array('PT', 'CV', 'UD', 'PD', 'Perum');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @link http://id.wikipedia.org/wiki/Jenis_badan_usaha
     */
<<<<<<< HEAD
    protected static $companySuffix = ['(Persero) Tbk', 'Tbk'];
=======
    protected static $companySuffix = array('(Persero) Tbk', 'Tbk');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Get company prefix
     *
     * @return string company prefix
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * Get company suffix
     *
     * @return string company suffix
     */
    public static function companySuffix()
    {
        return static::randomElement(static::$companySuffix);
    }
}
