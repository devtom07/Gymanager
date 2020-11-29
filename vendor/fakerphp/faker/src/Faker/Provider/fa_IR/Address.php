<?php

namespace Faker\Provider\fa_IR;

class Address extends \Faker\Provider\Address
{
<<<<<<< HEAD
    protected static $cityPrefix = ['استان'];
    protected static $streetPrefix = ['خیابان'];
    protected static $buildingNamePrefix = ['ساختمان'];
    protected static $buildingNumberPrefix = ['پلاک', 'قطعه'];
    protected static $postcodePrefix = ['کد پستی'];

    protected static $cityName = [
=======
    protected static $cityPrefix = array('استان');
    protected static $streetPrefix = array('خیابان');
    protected static $buildingNamePrefix = array('ساختمان');
    protected static $buildingNumberPrefix = array('پلاک', 'قطعه');
    protected static $postcodePrefix = array('کد پستی');

    protected static $cityName = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        "آذربایجان شرقی", "آذربایجان غربی", "اردبیل", "اصفهان", "البرز", "ایلام", "بوشهر",
        "تهران", "خراسان جنوبی", "خراسان رضوی", "خراسان شمالی", "خوزستان", "زنجان", "سمنان",
        "سیستان و بلوچستان", "فارس", "قزوین", "قم", "لرستان", "مازندران", "مرکزی", "هرمزگان",
        "همدان", "چهارمحال و بختیاری", "کردستان", "کرمان", "کرمانشاه", "کهگیلویه و بویراحمد",
        "گلستان", "گیلان", "یزد"
<<<<<<< HEAD
    ];

    protected static $cityFormats = [
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    ];
    protected static $streetNameFormats = [
        '{{streetPrefix}} {{lastName}}'
    ];
    protected static $streetAddressFormats = [
        '{{streetName}} {{building}}'
    ];
    protected static $addressFormats = [
        '{{city}} {{streetAddress}} {{postcodePrefix}} {{postcode}}',
        '{{city}} {{streetAddress}}',
    ];
    protected static $buildingFormat = [
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}',
    ];

    protected static $postcode = ['##########'];
    protected static $country = ['ایران'];
=======
    );

    protected static $cityFormats = array(
        '{{cityName}}',
        '{{cityPrefix}} {{cityName}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{building}}'
    );
    protected static $addressFormats = array(
        '{{city}} {{streetAddress}} {{postcodePrefix}} {{postcode}}',
        '{{city}} {{streetAddress}}',
    );
    protected static $buildingFormat = array(
        '{{buildingNamePrefix}} {{firstName}} {{buildingNumberPrefix}} {{buildingNumber}}',
        '{{buildingNamePrefix}} {{firstName}}',
    );

    protected static $postcode = array('##########');
    protected static $country = array('ایران');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'استان'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'زنجان'
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityName);
    }

    /**
     * @example 'خیابان'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'ساختمان'
     */
    public static function buildingNamePrefix()
    {
        return static::randomElement(static::$buildingNamePrefix);
    }

    /**
     * @example 'پلاک'
     */
    public static function buildingNumberPrefix()
    {
        return static::randomElement(static::$buildingNumberPrefix);
    }

    /**
     * @example 'ساختمان آفتاب پلاک 24'
     */
    public function building()
    {
        $format = static::randomElement(static::$buildingFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'کد پستی'
     */
    public static function postcodePrefix()
    {
        return static::randomElement(static::$postcodePrefix);
    }
}
