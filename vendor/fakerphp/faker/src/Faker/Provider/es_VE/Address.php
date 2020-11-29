<?php

namespace Faker\Provider\es_VE;

class Address extends \Faker\Provider\es_ES\Address
{
<<<<<<< HEAD
    protected static $cityPrefix = ['San', 'Santa', 'Puerto', 'Valle', 'Villa', 'Parroquia', 'El', 'Los', 'La', 'Las'];
    protected static $citySuffix = ['del Valle', 'de Mara', 'de Altagracia', 'de Asis', 'del Tuy', 'de Mata'];
    protected static $buildingNumber = ['###', '##', '#'];
    protected static $streetPrefix = [
        'Calle', 'Avenida', 'Av.', 'Cl.', 'Carretera', 'Callejón', 'Vereda'
    ];
    protected static $streetSuffix = ['Norte', 'Este', ' Sur', ' Oeste'];
    protected static $postcode = ['####'];
    protected static $state = [
        'Amazonas', 'Anzoátegui', 'Apure', 'Aragua', 'Barinas', 'Bolívar', 'Carabobo', 'Cojedes', 'Delta Amacuro',
        'Distrito Capital', 'Falcón', 'Guárico', 'Lara', 'Mérida', 'Miranda', 'Monagas', 'Nueva Esparta', 'Portuguesa',
        'Sucre', 'Táchira', 'Trujillo', 'Vargas', 'Yaracuy', 'Zulia'
    ];
    protected static $cityFormats = [
=======
    protected static $cityPrefix = array('San', 'Santa', 'Puerto', 'Valle', 'Villa', 'Parroquia', 'El', 'Los', 'La', 'Las');
    protected static $citySuffix = array('del Valle', 'de Mara', 'de Altagracia', 'de Asis', 'del Tuy', 'de Mata');
    protected static $buildingNumber = array('###', '##', '#');
    protected static $streetPrefix = array(
        'Calle', 'Avenida', 'Av.', 'Cl.', 'Carretera', 'Callejón', 'Vereda'
    );
    protected static $streetSuffix = array('Norte', 'Este', ' Sur', ' Oeste');
    protected static $postcode = array('####');
    protected static $state = array(
        'Amazonas', 'Anzoátegui', 'Apure', 'Aragua', 'Barinas', 'Bolívar', 'Carabobo', 'Cojedes', 'Delta Amacuro',
        'Distrito Capital', 'Falcón', 'Guárico', 'Lara', 'Mérida', 'Miranda', 'Monagas', 'Nueva Esparta', 'Portuguesa',
        'Sucre', 'Táchira', 'Trujillo', 'Vargas', 'Yaracuy', 'Zulia'
    );
    protected static $cityFormats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{cityPrefix}} {{firstName}}{{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
<<<<<<< HEAD
    ];
    protected static $streetNameFormats = [
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}'
    ];
    protected static $streetAddressFormats = [
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
        '{{streetName}}, {{secondaryAddress}}',
    ];
    protected static $addressFormats = [
        "{{streetAddress}}, {{city}} Edo. {{state}}",
        "{{streetAddress}}, {{city}} Edo. {{state}}, {{postcode}}"
    ];
    protected static $secondaryAddressFormats = ['Nro #', 'Piso #', 'Casa #', 'Hab. #', 'Apto #', 'Nro ##', 'Piso ##', 'Casa ##', 'Hab. ##', 'Apto ##'];
=======
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
        '{{streetName}}, {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{city}} Edo. {{state}}",
        "{{streetAddress}}, {{city}} Edo. {{state}}, {{postcode}}"
    );
    protected static $secondaryAddressFormats = array('Nro #', 'Piso #', 'Casa #', 'Hab. #', 'Apto #', 'Nro ##', 'Piso ##', 'Casa ##', 'Hab. ##', 'Apto ##');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Nro 3'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Aragua'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
