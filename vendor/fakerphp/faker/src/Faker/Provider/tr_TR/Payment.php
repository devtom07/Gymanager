<?php

namespace Faker\Provider\tr_TR;

class Payment extends \Faker\Provider\Payment
{
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
    public static function bankAccountNumber($prefix = '', $countryCode = 'TR', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
