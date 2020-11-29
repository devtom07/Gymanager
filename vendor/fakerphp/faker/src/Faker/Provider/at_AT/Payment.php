<?php

namespace Faker\Provider\at_AT;

<<<<<<< HEAD
=======
/**
 * Class Payment
 *
 * @package Faker\Provider\at_AT
 */
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
class Payment extends \Faker\Provider\Payment
{
    /**
     * Value Added Tax (VAT)
     *
     * @example 'ATU12345678', ('spaced') 'AT U12345678'
     *
     * @see http://ec.europa.eu/taxation_customs/vies/faq.html?locale=en#item_11
     * @see http://www.iecomputersystems.com/ordering/eu_vat_numbers.htm
     * @see http://en.wikipedia.org/wiki/VAT_identification_number
     *
     * @param bool $spacedNationalPrefix
     *
     * @return string VAT Number
     */
    public static function vat($spacedNationalPrefix = true)
    {
        $prefix = $spacedNationalPrefix ? "AT U" : "ATU";

        return sprintf("%s%d", $prefix, self::randomNumber(8, true));
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
    public static function bankAccountNumber($prefix = '', $countryCode = 'AT', $length = null)
    {
        return static::iban($countryCode, $prefix, $length);
    }
}
