<?php

namespace Faker\Provider\ar_JO;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    ];

    protected static $bsWords = [
        []
    ];

    protected static $catchPhraseWords = [
        ['الخدمات','الحلول','الانظمة'],
        [
            'الذهبية','الذكية','المتطورة','المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية'
        ],
    ];

    protected static $companyPrefix = ['شركة','مؤسسة','مجموعة','مكتب','أكاديمية','معرض'];

    protected static $companySuffix = ['وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه'];
=======
    protected static $formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}} {{companySuffix}}',
        '{{companyPrefix}} {{lastName}}',
    );

    protected static $bsWords = array(
        array()
    );

    protected static $catchPhraseWords = array(
        array('الخدمات','الحلول','الانظمة'),
        array(
            'الذهبية','الذكية','المتطورة','المتقدمة', 'الدولية', 'المتخصصه', 'السريعة',
            'المثلى', 'الابداعية', 'المتكاملة', 'المتغيرة', 'المثالية'
            ),
    );

    protected static $companyPrefix = array('شركة','مؤسسة','مجموعة','مكتب','أكاديمية','معرض');

    protected static $companySuffix = array('وأولاده', 'للمساهمة المحدودة', ' ذ.م.م', 'مساهمة عامة', 'وشركائه');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'مؤسسة'
     * @return string
     */
    public function companyPrefix()
    {
        return static::randomElement(self::$companyPrefix);
    }

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
