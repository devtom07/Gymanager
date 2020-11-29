<?php

namespace Faker\Provider\kk_KZ;

class Payment extends \Faker\Provider\Payment
{
<<<<<<< HEAD
    protected static $banks = [
        'Қазкоммерцбанк',
        'Халық Банкі',
    ];
=======
    protected static $banks = array(
        'Қазкоммерцбанк',
        'Халық Банкі',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'Қазкоммерцбанк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }

    /**
     * International Bank Account Number (IBAN)
     * @link http://en.wikipedia.org/wiki/International_Bank_Account_Number
     * @param  string  $prefix      for generating bank account number of a specific bank
     * @param  string  $countryCode ISO 3166-1 alpha-2 country code
<<<<<<< HEAD
     * @param  int $length      total length without country code and 2 check digits
=======
     * @param  integer $length      total length without country code and 2 check digits
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
     * @return string
     */
    public static function bankAccountNumber($prefix = '', $countryCode = 'KZ', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
