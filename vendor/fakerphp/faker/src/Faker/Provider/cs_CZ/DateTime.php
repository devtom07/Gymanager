<?php

namespace Faker\Provider\cs_CZ;

/**
 * Czech months and days without setting locale
 */
class DateTime extends \Faker\Provider\DateTime
{
<<<<<<< HEAD
    protected static $days = [
        'neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'
    ];
    protected static $months = [
        'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec',
        'srpen', 'září', 'říjen', 'listopad', 'prosinec'
    ];
    protected static $monthsGenitive  = [
        'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července',
        'srpna', 'září', 'října', 'listopadu', 'prosince'
    ];
    protected static $formattedDateFormat = [
        '{{dayOfMonth}}. {{monthNameGenitive}} {{year}}',
    ];
=======
    protected static $days = array(
        'neděle', 'pondělí', 'úterý', 'středa', 'čtvrtek', 'pátek', 'sobota'
    );
    protected static $months = array(
        'leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec',
        'srpen', 'září', 'říjen', 'listopad', 'prosinec'
    );
    protected static $monthsGenitive  = array(
        'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července',
        'srpna', 'září', 'října', 'listopadu', 'prosince'
    );
    protected static $formattedDateFormat = array(
        '{{dayOfMonth}}. {{monthNameGenitive}} {{year}}',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    public static function monthName($max = 'now')
    {
        return static::$months[parent::month($max) - 1];
    }

    public static function monthNameGenitive($max = 'now')
    {
        return static::$monthsGenitive[parent::month($max) - 1];
    }

    public static function dayOfWeek($max = 'now')
    {
        return static::$days[static::dateTime($max)->format('w')];
    }

    /**
     * @param  \DateTime|int|string $max maximum timestamp used as random end limit, default to "now"
     * @return string
     * @example '2'
     */
    public static function dayOfMonth($max = 'now')
    {
        return static::dateTime($max)->format('j');
    }

    /**
     * Full date with inflected month
     * @return string
     * @example '16. listopadu 2003'
     */
    public function formattedDate()
    {
        $format = static::randomElement(static::$formattedDateFormat);

        return $this->generator->parse($format);
    }
}
