<?php

namespace Faker\Provider\el_GR;

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $companySuffix = [
=======
    protected static $companySuffix = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'Ο.Ε',
        'Ε.Ε',
        'Α.Ε',
        'Ε.Π.Ε'
<<<<<<< HEAD
    ];

    protected static $companyFormats = [
        '{{lastName}} {{firstName}} {{companySuffix}}',
        '{{lastName}}-{{firstName}}'
    ];

    protected static $grafm = ['#########'];


    protected static $doy = [
=======
    );

    protected static $companyFormats = array(
        '{{lastName}} {{firstName}} {{companySuffix}}',
        '{{lastName}}-{{firstName}}'
    );

    protected static $grafm = array('#########');


    protected static $doy = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'Α\' Αθήνας',
        'Β\' Αθήνας',
        'Γ\' Αθήνας',
        'ΣΤ\' Αθήνας',
        'Γαλάτσιου',
        'Α\' Πειραιά',
        'Β\' Πειραιά',
        'Γ\' Πειραιά',
        'Α\' Θεσσαλονίκης',
        'Β\' Θεσσαλονίκης',
        'Γλυφάδας',
        'Ωροπού',
        'Καλιθέας',
        'Αγίου Δημητρίου',
        'Νέας Σμύρνης',
        'Αμαρουσίου',
        'Θήρας',
        'Αμοργού',
        'Πατρών',
        'ΔΟΥ ΠΛΟΙΩΝ',
        'ΦΑΕΕ ΑΘΗΝΩΝ'
<<<<<<< HEAD
    ];


    protected static $object = [
=======
    );


    protected static $object = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        'Προγραμματιστής',
        'Δικηγόρος',
        'Γιατρός',
        'Γραφίστας',
        'Αρχαιολόγος',
        'Εκπαιδευτικός',
        'Μεταφραστής',
        'Μηχανολόγος-μηχανικός',
        'Αρχιτέκτονας',
        'Δημοσιογράφος',
        'Υπηρεσίες Διαδικτύου',
        'Ραδιοφωνικές παραγωγές',
        'Καραγκιοζοπαίχτης',
        'Κουλουράς',
        'Κομπάρσος',
        'Καλλιτεχνικός πράκτορας',
        'Εισαγωγαί-εξαγωγαί',
        'Ωρολογοποιός',
        'Καθεκλοποιός',
<<<<<<< HEAD
    ];
=======
    );
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @example 'Αθήνας'
     */
    public static function doy()
    {
        return static::randomElement(static::$doy);
    }

    /**
     * Return The profession of a company
     *
     * @example 'Δημοσιογράφος'
     */
    public static function object()
    {
        return static::randomElement(static::$object);
    }
}
