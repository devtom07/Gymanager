<?php

namespace Faker;

/**
 * Proxy for other generators, to return only unique values. Works with
 * Faker\Generator\Base->unique()
 */
class UniqueGenerator
{
    protected $generator;
    protected $maxRetries;
<<<<<<< HEAD
    protected $uniques = [];

    /**
     * @param Generator $generator
     * @param int $maxRetries
=======
    protected $uniques = array();

    /**
     * @param Generator $generator
     * @param integer $maxRetries
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
     */
    public function __construct(Generator $generator, $maxRetries = 10000)
    {
        $this->generator = $generator;
        $this->maxRetries = $maxRetries;
    }

    /**
     * Catch and proxy all generator calls but return only unique values
     * @param string $attribute
     * @return mixed
     */
    public function __get($attribute)
    {
<<<<<<< HEAD
        return $this->__call($attribute, []);
=======
        return $this->__call($attribute, array());
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    }

    /**
     * Catch and proxy all generator calls with arguments but return only unique values
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if (!isset($this->uniques[$name])) {
<<<<<<< HEAD
            $this->uniques[$name] = [];
        }
        $i = 0;
        do {
            $res = call_user_func_array([$this->generator, $name], $arguments);
=======
            $this->uniques[$name] = array();
        }
        $i = 0;
        do {
            $res = call_user_func_array(array($this->generator, $name), $arguments);
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            $i++;
            if ($i > $this->maxRetries) {
                throw new \OverflowException(sprintf('Maximum retries of %d reached without finding a unique value', $this->maxRetries));
            }
        } while (array_key_exists(serialize($res), $this->uniques[$name]));
        $this->uniques[$name][serialize($res)]= null;

        return $res;
    }
}
