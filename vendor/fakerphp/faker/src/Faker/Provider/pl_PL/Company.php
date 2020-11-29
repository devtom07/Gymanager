<?php

namespace Faker\Provider\pl_PL;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastName}}',
        '{{lastName}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
        '{{lastName}}-{{lastName}}',
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['S.A.', 'i syn', 'sp. z o.o.', 'sp. j.', 'sp. p.', 'sp. k.', 'S.K.A', 's. c.', 'P.P.O.F'];

    protected static $companyPrefix = ['Grupa', 'Fundacja', 'Stowarzyszenie', 'Spółdzielnia'];
=======
    );

    protected static $companySuffix = array('S.A.', 'i syn', 'sp. z o.o.', 'sp. j.', 'sp. p.', 'sp. k.', 'S.K.A', 's. c.', 'P.P.O.F');

    protected static $companyPrefix = array('Grupa', 'Fundacja', 'Stowarzyszenie', 'Spółdzielnia');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'Grupa'
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /*
     * Register of the National Economy
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 9 digit number
     */
    public static function regon()
    {
<<<<<<< HEAD
        $weights = [8, 9, 2, 3, 4, 5, 6, 7];
        $regionNumber = static::numberBetween(0, 49) * 2 + 1;
        $result = [(int) ($regionNumber / 10), $regionNumber % 10];
=======
        $weights = array(8, 9, 2, 3, 4, 5, 6, 7);
        $regionNumber = static::numberBetween(0, 49) * 2 + 1;
        $result = array((int) ($regionNumber / 10), $regionNumber % 10);
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        for ($i = 2, $size = count($weights); $i < $size; $i++) {
            $result[$i] = static::randomDigit();
        }
        $checksum = 0;
        for ($i = 0, $size = count($result); $i < $size; $i++) {
            $checksum += $weights[$i] * $result[$i];
        }
        $checksum %= 11;
        if ($checksum == 10) {
            $checksum = 0;
        }
        $result[] = $checksum;

        return implode('', $result);
    }

    /**
     * Register of the National Economy, local entity number
     * @link http://pl.wikipedia.org/wiki/REGON
     * @return 14 digit number
     */
    public static function regonLocal()
    {
<<<<<<< HEAD
        $weights = [2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8];
=======
        $weights = array(2, 4, 8, 5, 0, 9, 7, 3, 6, 1, 2, 4, 8);
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        $result = str_split(static::regon());
        for ($i = count($result), $size = count($weights); $i < $size; $i++) {
            $result[$i] = static::randomDigit();
        }
        $checksum = 0;
        for ($i = 0, $size = count($result); $i < $size; $i++) {
            $checksum += $weights[$i] * $result[$i];
        }
        $checksum %= 11;
        if ($checksum == 10) {
            $checksum = 0;
        }
        $result[] = $checksum;

        return implode('', $result);
    }
}
