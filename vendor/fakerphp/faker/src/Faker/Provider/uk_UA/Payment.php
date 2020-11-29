<?php

namespace Faker\Provider\uk_UA;

class Payment extends \Faker\Provider\Payment
{
    /**
     * @see list of Ukraine banks (2017-11-08), source: https://uk.wikipedia.org/wiki/%D0%91%D0%B0%D0%BD%D0%BA%D0%B8_%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B8
     */
<<<<<<< HEAD
    protected static $banks = [
=======
    protected static $banks = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'А-Банк', 'Авангард', 'Айбокс Банк', 'Акордбанк', 'Альпарі Банк', 'Альтбанк', 'Альфа-Банк', 'Альянс', 'Апекс-банк', 'Аркада', 'Асвіо Банк',
        'Банк 3/4', 'БМ Банк', 'Богуслав', 'БТА Банк', 'Вернум Банк', 'Восток', 'ВТБ',
        'VS Bank',
        'Гефест', 'Глобус', 'Грант',
        'DV Bank', 'Deutsche Bank',
        'Експрес-Банк',
        'Європромбанк',
        'Земельний капітал',
        'Ідея Банк', 'Інвестицій', 'ING', 'Індустріалбанк',
        'Комерційний Індустріальний Банк', 'Кліринговий', 'Комінвестбанк', 'Конкорд', 'Кредит Дніпро', 'Кредит Європа Банк', 'Кредит Оптима Банк', 'Кредитвест', 'Crédit Agricole', 'Кредобанк', 'Кристалбанк',
        'Львів',
        'Марфін банк', 'Мегабанк', 'МетаБанк', 'Міжнародний інвестиційний банк', 'Місто Банк', 'Мотор Банк',
        'Оксі Банк', 'OTP Bank', 'Ощадбанк',
        'Перший Інвестиційний Банк', 'Південний', 'Piraeus Bank', 'Полікомбанк', 'Полтава-банк', 'Портал', 'Правекс-Банк', 'Преміум', 'ПриватБанк', 'ПроКредит Банк', 'Промінвестбанк', 'ПУМБ', 'Промислово-фінансовий банк',
        'Радабанк', 'Райффайзен Аваль', 'РВС банк', 'Регіон-банк', 'Розрахунковий центр',
        'Сбербанк', 'SEB', 'Сітібанк', 'Січ',
        'Таскомбанк', 'Траст-Капітал',
        'Український Капітал', 'Український банк реконструкції та розвитку', 'Укрбудінвестбанк', 'Укргазбанк', 'Укрексімбанк', 'УкрСиббанк', 'Укрсоцбанк', 'Універсал Банк',
        'Фамільний', 'Фінансовий партнер', 'Forward Bank',
        'Центр',
        'Unex'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'Сітібанк'
     */
    public static function bank()
    {
        return static::randomElement(static::$banks);
    }
}
