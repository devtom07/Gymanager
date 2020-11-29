<?php

namespace Faker\Provider\fa_IR;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{firstName}}',
        '{{companyPrefix}} {{companyField}} {{lastName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{firstName}}',
        '{{companyField}} {{lastName}}',
<<<<<<< HEAD
    ];

    protected static $companyPrefix = [
        'شرکت', 'موسسه', 'سازمان', 'بنیاد'
    ];

    protected static $companyField = [
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد'
    ];

    protected static $contract = [
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    ];
=======
    );

    protected static $companyPrefix = array(
        'شرکت', 'موسسه', 'سازمان', 'بنیاد'
    );

    protected static $companyField = array(
        'فناوری اطلاعات', 'راه و ساختمان', 'توسعه معادن', 'استخراج و اکتشاف',
        'سرمایه گذاری', 'نساجی', 'کاریابی', 'تجهیزات اداری', 'تولیدی', 'فولاد'
    );

    protected static $contract = array(
        'رسمی', 'پیمانی', 'تمام وقت', 'پاره وقت', 'پروژه ای', 'ساعتی',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'شرکت'
     * @return string
     */
    public static function companyPrefix()
    {
        return static::randomElement(static::$companyPrefix);
    }

    /**
     * @example 'سرمایه گذاری'
     * @return string
     */
    public static function companyField()
    {
        return static::randomElement(static::$companyField);
    }

    /**
<<<<<<< HEAD
     * @example 'تمام وقت'
     * @return string
     */
=======
    * @example 'تمام وقت'
    * @return string
    */
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    public function contract()
    {
        return static::randomElement(static::$contract);
    }
}
