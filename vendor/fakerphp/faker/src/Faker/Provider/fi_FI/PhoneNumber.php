<?php

namespace Faker\Provider\fi_FI;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/localcallsandtelecommunicationsareas/mapoftelecommunicationsareas.html
     * @var array
     */
<<<<<<< HEAD
    protected static $landLineareaCodes = [
=======
    protected static $landLineareaCodes = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '02',
        '03',
        '05',
        '06',
        '08',
        '09',
        '013',
        '014',
        '015',
        '016',
        '017',
        '018',
        '019',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @link https://www.viestintavirasto.fi/en/internettelephone/numberingoftelecommunicationsnetworks/mobilenetworks/mobilenetworkareacodes.html
     * @var array
     */
<<<<<<< HEAD
    protected static $mobileNetworkAreaCodes = [
=======
    protected static $mobileNetworkAreaCodes = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '040',
        '050',
        '044',
        '045',
<<<<<<< HEAD
    ];

    protected static $numberFormats = [
        '### ####',
        '#######',
    ];

    protected static $formats = [
=======
    );

    protected static $numberFormats = array(
        '### ####',
        '#######',
    );

    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '+358 ({{ e164MobileNetworkAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164MobileNetworkAreaCode }} {{ numberFormat }}',
        '+358 ({{ e164landLineAreaCode }}) {{ numberFormat }}',
        '+358 {{ e164landLineAreaCode }} {{ numberFormat }}',
        '{{ mobileNetworkAreaCode }}{{ separator }}{{ numberFormat }}',
        '{{ landLineAreaCode }}{{ separator }}{{ numberFormat }}',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @return string
     */
    public function landLineAreaCode()
    {
        return static::randomElement(static::$landLineareaCodes);
    }

    /**
     * @return string
     */
    public function e164landLineAreaCode()
    {
        return substr(static::randomElement(static::$landLineareaCodes), 1);
    }

    /**
     * @return string
     */
    public function mobileNetworkAreaCode()
    {
        return static::randomElement(static::$mobileNetworkAreaCodes);
    }

    /**
     * @return string
     */
    public function e164MobileNetworkAreaCode()
    {
        return substr(static::randomElement(static::$mobileNetworkAreaCodes), 1);
    }

    /**
     * @return string
     */
    public function numberFormat()
    {
        return static::randomElement(static::$numberFormats);
    }

    /**
     * @return string
     */
    public function separator()
    {
<<<<<<< HEAD
        return static::randomElement([' ', '-']);
=======
        return static::randomElement(array(' ', '-'));
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    }
}
