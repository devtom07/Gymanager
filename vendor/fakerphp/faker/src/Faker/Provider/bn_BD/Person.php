<?php

namespace Faker\Provider\bn_BD;

class Person extends \Faker\Provider\Person
{
<<<<<<< HEAD
    protected static $maleNameFormats = [
=======
    protected static $maleNameFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
<<<<<<< HEAD
    ];

    protected static $femaleNameFormats = [
=======
    );

    protected static $femaleNameFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
<<<<<<< HEAD
    ];

    protected static $firstNameMale = [
        'অনন্ত', 'আব্দুল্লাহ', 'আহসান',  'ইমরুল', 'করিম', 'জলিল', 'বরকত', 'মাসনুন', 'রহিম',  'রিফাত', 'হাসনাত', 'হাসান',
    ];

    protected static $firstNameFemale = [
        'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা', 'মাহজাবিন', 'মেহনাজ', 'রহিমা', 'লাবনী', 'সাবরিন', 'সাবরিনা', 'হাসিন', 'রহমত',
    ];

    protected static $lastName = [
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম'
    ];

    protected static $titleMale = ['মি.'];

    protected static $titleFemale = ['মিসেস.', 'মিস.'];
=======
    );

    protected static $firstNameMale = array(
        'অনন্ত', 'আব্দুল্লাহ', 'আহসান',  'ইমরুল', 'করিম', 'জলিল', 'বরকত', 'মাসনুন', 'রহিম',  'রিফাত', 'হাসনাত', 'হাসান',
    );

    protected static $firstNameFemale = array(
        'জারিন', 'জেরিন', 'ফারহানা', 'ফাহমেদা', 'মাহজাবিন', 'মেহনাজ', 'রহিমা', 'লাবনী', 'সাবরিন', 'সাবরিনা', 'হাসিন', 'রহমত',
    );

    protected static $lastName = array(
        'খান', 'শেখ', 'শিকদার', 'আলী', 'তাসনীম', 'তাবাসসুম'
    );

    protected static $titleMale = array('মি.');

    protected static $titleFemale = array('মিসেস.', 'মিস.');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
}
