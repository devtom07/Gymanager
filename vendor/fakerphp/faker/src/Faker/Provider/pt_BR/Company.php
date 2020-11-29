<?php

namespace Faker\Provider\pt_BR;

require_once "check_digit.php";

class Company extends \Faker\Provider\Company
{
<<<<<<< HEAD
    protected static $formats = [
=======
    protected static $formats = array(
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}} e {{lastName}}',
        '{{lastName}} e {{lastName}} {{companySuffix}}',
        '{{lastName}} Comercial Ltda.'
<<<<<<< HEAD
    ];

    protected static $companySuffix = ['e Filhos', 'e Associados', 'Ltda.', 'S.A.'];
=======
    );

    protected static $companySuffix = array('e Filhos', 'e Associados', 'Ltda.', 'S.A.');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * A random CNPJ number.
     * @link http://en.wikipedia.org/wiki/CNPJ
     * @param bool $formatted If the number should have dots/slashes/dashes or not.
     * @return string
     */
    public function cnpj($formatted = true)
    {
        $n = $this->generator->numerify('########0001');
        $n .= check_digit($n);
        $n .= check_digit($n);

        return $formatted ? vsprintf('%d%d.%d%d%d.%d%d%d/%d%d%d%d-%d%d', str_split($n)) : $n;
    }
}
