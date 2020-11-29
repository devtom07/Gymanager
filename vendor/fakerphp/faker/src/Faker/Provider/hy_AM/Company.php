<?php

namespace Faker\Provider\hy_AM;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} {{companySuffix}}',
        '{{lastName}} եղբայրներ',
<<<<<<< HEAD
    ];

    protected static $catchPhraseWords = [

    ];

    protected static $bsWords = [

    ];

    protected static $companySuffix = ['ՍՊԸ','և որդիներ','ՓԲԸ','ԲԲԸ'];
=======
    );

    protected static $catchPhraseWords = array(

    );

    protected static $bsWords = array(

    );

    protected static $companySuffix = array('ՍՊԸ','և որդիներ','ՓԲԸ','ԲԲԸ');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
<<<<<<< HEAD
        $result = [];
=======
        $result = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        foreach (static::$catchPhraseWords as &$word) {
            $result[] = static::randomElement($word);
        }

<<<<<<< HEAD
        return implode(' ', $result);
=======
        return join(' ', $result);
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
<<<<<<< HEAD
        $result = [];
=======
        $result = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        foreach (static::$bsWords as &$word) {
            $result[] = static::randomElement($word);
        }

<<<<<<< HEAD
        return implode(' ', $result);
=======
        return join(' ', $result);
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    }
}
