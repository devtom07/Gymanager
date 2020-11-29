<?php

namespace Faker;

class Documentor
{
    protected $generator;

    /**
     * @param Generator $generator
     */
    public function __construct(Generator $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @return array
     */
    public function getFormatters()
    {
<<<<<<< HEAD
        $formatters = [];
=======
        $formatters = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        $providers = array_reverse($this->generator->getProviders());
        $providers[]= new Provider\Base($this->generator);
        foreach ($providers as $provider) {
            $providerClass = get_class($provider);
<<<<<<< HEAD
            $formatters[$providerClass] = [];
=======
            $formatters[$providerClass] = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            $refl = new \ReflectionObject($provider);
            foreach ($refl->getMethods(\ReflectionMethod::IS_PUBLIC) as $reflmethod) {
                if ($reflmethod->getDeclaringClass()->getName() == 'Faker\Provider\Base' && $providerClass != 'Faker\Provider\Base') {
                    continue;
                }
                $methodName = $reflmethod->name;
                if ($reflmethod->isConstructor()) {
                    continue;
                }
<<<<<<< HEAD
                $parameters = [];
=======
                $parameters = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
                foreach ($reflmethod->getParameters() as $reflparameter) {
                    $parameter = '$' . $reflparameter->getName();
                    if ($reflparameter->isDefaultValueAvailable()) {
                        $parameter .= ' = ' . var_export($reflparameter->getDefaultValue(), true);
                    }
                    $parameters []= $parameter;
                }
<<<<<<< HEAD
                $parameters = $parameters ? '(' . implode(', ', $parameters) . ')' : '';
=======
                $parameters = $parameters ? '(' . join(', ', $parameters) . ')' : '';
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
                try {
                    $example = $this->generator->format($methodName);
                } catch (\InvalidArgumentException $e) {
                    $example = '';
                }
                if (is_array($example)) {
<<<<<<< HEAD
                    $example = "array('" . implode("', '", $example) . "')";
=======
                    $example = "array('" . join("', '", $example) . "')";
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
                } elseif ($example instanceof \DateTime) {
                    $example = "DateTime('" . $example->format('Y-m-d H:i:s') . "')";
                } elseif ($example instanceof Generator || $example instanceof UniqueGenerator) { // modifier
                    $example = '';
                } else {
                    $example = var_export($example, true);
                }
                $formatters[$providerClass][$methodName . $parameters] = $example;
            }
        }

        return $formatters;
    }
}
