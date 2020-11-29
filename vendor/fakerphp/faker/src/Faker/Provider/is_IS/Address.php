<?php

namespace Faker\Provider\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Address extends \Faker\Provider\Address
{
    /**
     * @var array Countries in icelandic
     */
<<<<<<< HEAD
    protected static $country = [
=======
    protected static $country = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'Afganistan', 'Albanía', 'Alsír', 'Andorra', 'Angóla', 'Angvilla', 'Antígva og Barbúda', 'Argentína',
        'Armenía', 'Arúba', 'Aserbaídsjan', 'Austur-Kongó', 'Austurríki', 'Austur-Tímor', 'Álandseyjar',
        'Ástralía', 'Bahamaeyjar', 'Bandaríkin', 'Bandaríska Samóa', 'Bangladess', 'Barbados', 'Barein',
        'Belgía', 'Belís', 'Benín', 'Bermúdaeyjar', 'Bosnía og Hersegóvína', 'Botsvana', 'Bouvet-eyja', 'Bólivía',
        'Brasilía', 'Bresku Indlandshafseyjar', 'Bretland', 'Brúnei', 'Búlgaría', 'Búrkína Fasó', 'Búrúndí', 'Bútan',
        'Cayman-eyjar', 'Chile', 'Cooks-eyjar', 'Danmörk', 'Djíbútí', 'Dóminíka', 'Dóminíska lýðveldið', 'Egyptaland',
        'Eistland', 'Ekvador', 'El Salvador', 'England', 'Erítrea', 'Eþíópía', 'Falklandseyjar', 'Filippseyjar',
        'Finnland', 'Fídjieyjar', 'Fílabeinsströndin', 'Frakkland', 'Franska Gvæjana', 'Franska Pólýnesía',
        'Frönsku suðlægu landsvæðin', 'Færeyjar', 'Gabon', 'Gambía', 'Gana', 'Georgía', 'Gíbraltar', 'Gínea',
        'Gínea-Bissá', 'Grenada', 'Grikkland', 'Grænhöfðaeyjar', 'Grænland', 'Gvadelúpeyjar', 'Gvam', 'Gvatemala',
        'Gvæjana', 'Haítí', 'Heard og McDonalds-eyjar', 'Holland', 'Hollensku Antillur', 'Hondúras', 'Hong Kong',
        'Hvíta-Rússland', 'Indland', 'Indónesía', 'Írak', 'Íran', 'Írland', 'Ísland', 'Ísrael', 'Ítalía', 'Jamaíka',
        'Japan', 'Jemen', 'Jólaey', 'Jómfrúaeyjar', 'Jórdanía', 'Kambódía', 'Kamerún', 'Kanada', 'Kasakstan', 'Katar',
        'Kenía', 'Kirgisistan', 'Kína', 'Kíribatí', 'Kongó', 'Austur-Kongó', 'Vestur-Kongó', 'Kostaríka', 'Kókoseyjar',
        'Kólumbía', 'Kómoreyjar', 'Kórea', 'Norður-Kórea;', 'Suður-Kórea', 'Króatía', 'Kúba', 'Kúveit', 'Kýpur',
        'Laos', 'Lesótó', 'Lettland', 'Liechtenstein', 'Litháen', 'Líbanon', 'Líbería', 'Líbía', 'Lúxemborg',
        'Madagaskar', 'Makaó', 'Makedónía', 'Malasía', 'Malaví', 'Maldíveyjar', 'Malí', 'Malta', 'Marokkó',
        'Marshall-eyjar', 'Martiník', 'Mayotte', 'Máritanía', 'Máritíus', 'Mexíkó', 'Mið-Afríkulýðveldið',
        'Miðbaugs-Gínea', 'Míkrónesía', 'Mjanmar', 'Moldóva', 'Mongólía', 'Montserrat', 'Mónakó', 'Mósambík',
        'Namibía', 'Nárú', 'Nepal', 'Niue', 'Níger', 'Nígería', 'Níkaragva', 'Norður-Írland', 'Norður-Kórea',
        'Norður-Maríanaeyjar', 'Noregur', 'Norfolkeyja', 'Nýja-Kaledónía', 'Nýja-Sjáland', 'Óman', 'Pakistan',
        'Palá', 'Palestína', 'Panama', 'Papúa Nýja-Gínea', 'Paragvæ', 'Páfagarður', 'Perú', 'Pitcairn', 'Portúgal',
        'Pólland', 'Púertó Ríkó', 'Réunion', 'Rúanda', 'Rúmenía', 'Rússland', 'Salómonseyjar', 'Sambía',
        'Sameinuðu arabísku furstadæmin', 'Samóa', 'San Marínó', 'Sankti Helena', 'Sankti Kristófer og Nevis',
        'Sankti Lúsía', 'Sankti Pierre og Miquelon', 'Sankti Vinsent og Grenadíneyjar', 'Saó Tóme og Prinsípe',
        'Sádi-Arabía', 'Senegal', 'Serbía', 'Seychelles-eyjar', 'Simbabve', 'Singapúr', 'Síerra Leóne', 'Skotland',
        'Slóvakía', 'Slóvenía', 'Smáeyjar Bandaríkjanna', 'Sómalía', 'Spánn', 'Srí Lanka', 'Suður-Afríka',
        'Suður-Georgía og Suður-Sandvíkureyjar', 'Suður-Kórea', 'Suðurskautslandið', 'Súdan', 'Súrínam', 'Jan Mayen',
        'Svartfjallaland', 'Svasíland', 'Sviss', 'Svíþjóð', 'Sýrland', 'Tadsjikistan', 'Taíland', 'Taívan', 'Tansanía',
        'Tékkland', 'Tonga', 'Tógó', 'Tókelá', 'Trínidad og Tóbagó', 'Tsjad', 'Tsjetsjenía', 'Turks- og Caicos-eyjar',
        'Túnis', 'Túrkmenistan', 'Túvalú', 'Tyrkland', 'Ungverjaland', 'Úganda', 'Úkraína', 'Úrúgvæ', 'Úsbekistan',
        'Vanúatú', 'Venesúela', 'Vestur-Kongó', 'Vestur-Sahara', 'Víetnam', 'Wales', 'Wallis- og Fútúnaeyjar', 'Þýskaland'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic cities.
     */
<<<<<<< HEAD
    protected static $cityNames = [
=======
    protected static $cityNames = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'Reykjavík', 'Seltjarnarnes', 'Vogar', 'Kópavogur', 'Garðabær', 'Hafnarfjörður', 'Reykjanesbær', 'Grindavík',
        'Sandgerði', 'Garður', 'Reykjanesbær', 'Mosfellsbær', 'Akranes', 'Borgarnes', 'Reykholt', 'Stykkishólmur',
        'Flatey', 'Grundarfjörður', 'Ólafsvík', 'Snæfellsbær', 'Hellissandur', 'Búðardalur', 'Reykhólahreppur',
        'Ísafjörður', 'Hnífsdalur', 'Bolungarvík', 'Súðavík', 'Flateyri', 'Suðureyri', 'Patreksfjörður',
        'Tálknafjörður', 'Bíldudalur', 'Þingeyri', 'Staður', 'Hólmavík', 'Drangsnes', 'Árneshreppur', 'Hvammstangi',
        'Blönduós', 'Skagaströnd', 'Sauðárkrókur', 'Varmahlíð', 'Hofsós', 'Fljót', 'Siglufjörður', 'Akureyri',
        'Grenivík', 'Grímsey', 'Dalvík', 'Ólafsfjörður', 'Hrísey', 'Húsavík', 'Fosshóll', 'Laugar', 'Mývatn',
        'Kópasker', 'Raufarhöfn', 'Þórshöfn', 'Bakkafjörður', 'Vopnafjörður', 'Egilsstaðir', 'Seyðisfjörður',
        'Mjóifjörður', 'Borgarfjörður', 'Reyðarfjörður', 'Eskifjörður', 'Neskaupstaður', 'Fáskrúðsfjörður',
        'Stöðvarfjörður', 'Breiðdalsvík', 'Djúpivogur', 'Höfn', 'Selfoss', 'Hveragerði', 'Þorlákshöfn', 'Ölfus',
        'Eyrarbakki', 'Stokkseyri', 'Laugarvatn', 'Flúðir', 'Hella', 'Hvolsvöllur', 'Vík', 'Kirkjubæjarklaustur',
        'Vestmannaeyjar'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Street name suffix.
     */
<<<<<<< HEAD
    protected static $streetSuffix = [
=======
    protected static $streetSuffix = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'ás', 'bakki', 'braut', 'bær', 'brún', 'berg', 'fold', 'gata', 'gróf',
        'garðar', 'höfði', 'heimar', 'hamar', 'hólar', 'háls', 'kvísl', 'lækur',
        'leiti', 'land', 'múli', 'nes', 'rimi', 'stígur', 'stræti', 'stekkur',
        'slóð', 'skógar', 'sel', 'teigur', 'tún', 'vangur', 'vegur', 'vogur',
        'vað'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Street name prefix.
     */
<<<<<<< HEAD
    protected static $streetPrefix = [
=======
    protected static $streetPrefix = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'Aðal', 'Austur', 'Bakka', 'Braga', 'Báru', 'Brunn', 'Fiski', 'Leifs',
        'Týs', 'Birki', 'Suður', 'Norður', 'Vestur', 'Austur', 'Sanda', 'Skógar',
        'Stór', 'Sunnu', 'Tungu', 'Tangar', 'Úlfarfells', 'Vagn', 'Vind', 'Ysti',
        'Þing', 'Hamra', 'Hóla', 'Kríu', 'Iðu', 'Spóa', 'Starra', 'Uglu', 'Vals'
<<<<<<< HEAD
    ];

    /**
     * @var Icelandic zip code.
     **/
    protected static $postcode = [
        '%##'
    ];
=======
    );

    /**
     * @var Icelandic zip code.
    **/
    protected static $postcode = array(
        '%##'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic regions.
     */
<<<<<<< HEAD
    protected static $regionNames = [
        'Höfuðborgarsvæðið', 'Norðurland', 'Suðurland', 'Vesturland', 'Vestfirðir', 'Austurland', 'Suðurnes'
    ];
=======
    protected static $regionNames = array(
        'Höfuðborgarsvæðið', 'Norðurland', 'Suðurland', 'Vesturland', 'Vestfirðir', 'Austurland', 'Suðurnes'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic building numbers.
     */
<<<<<<< HEAD
    protected static $buildingNumber = [
        '%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
    ];
=======
    protected static $buildingNumber = array(
        '%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic city format.
     */
<<<<<<< HEAD
    protected static $cityFormats = [
        '{{cityName}}',
    ];
=======
    protected static $cityFormats = array(
        '{{cityName}}',
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic street's name formats.
     */
<<<<<<< HEAD
    protected static $streetNameFormats = [
=======
    protected static $streetNameFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{streetPrefix}}{{streetSuffix}}',
        '{{streetPrefix}}{{streetSuffix}}',
        '{{firstNameMale}}{{streetSuffix}}',
        '{{firstNameFemale}}{{streetSuffix}}'
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic street's address formats.
     */
<<<<<<< HEAD
    protected static $streetAddressFormats = [
        '{{streetName}} {{buildingNumber}}'
    ];
=======
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @var array Icelandic address format.
     */
<<<<<<< HEAD
    protected static $addressFormats = [
        "{{streetAddress}}\n{{postcode}} {{city}}",
    ];
=======
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{postcode}} {{city}}",
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Randomly return a real city name.
     *
     * @return string
     */
    public static function cityName()
    {
        return static::randomElement(static::$cityNames);
    }

    /**
     * Randomly return a street prefix.
     *
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * Randomly return a building number.
     *
     * @return string
     */
    public static function buildingNumber()
    {
        return static::toUpper(static::bothify(static::randomElement(static::$buildingNumber)));
    }

    /**
     * Randomly return a real region name.
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::$regionNames);
    }
}
