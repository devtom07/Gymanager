<?php

namespace Faker\ORM\Mandango;

use Mandango\Mandango;

/**
 * Service class for populating a database using Mandango.
 * A Populator can populate several tables using ActiveRecord classes.
 */
class Populator
{
    protected $generator;
    protected $mandango;
<<<<<<< HEAD
    protected $entities = [];
    protected $quantities = [];
=======
    protected $entities = array();
    protected $quantities = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * @param \Faker\Generator $generator
     * @param Mandango $mandango
     */
    public function __construct(\Faker\Generator $generator, Mandango $mandango)
    {
        $this->generator = $generator;
        $this->mandango = $mandango;
    }

    /**
     * Add an order for the generation of $number records for $entity.
     *
     * @param mixed $entity A Propel ActiveRecord classname, or a \Faker\ORM\Propel\EntityPopulator instance
     * @param int   $number The number of entities to populate
     */
<<<<<<< HEAD
    public function addEntity($entity, $number, $customColumnFormatters = [])
=======
    public function addEntity($entity, $number, $customColumnFormatters = array())
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
    {
        if (!$entity instanceof \Faker\ORM\Mandango\EntityPopulator) {
            $entity = new \Faker\ORM\Mandango\EntityPopulator($entity);
        }
        $entity->setColumnFormatters($entity->guessColumnFormatters($this->generator, $this->mandango));
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }
        $class = $entity->getClass();
        $this->entities[$class] = $entity;
        $this->quantities[$class] = $number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @return array A list of the inserted entities.
     */
    public function execute()
    {
<<<<<<< HEAD
        $insertedEntities = [];
=======
        $insertedEntities = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        foreach ($this->quantities as $class => $number) {
            for ($i=0; $i < $number; $i++) {
                $insertedEntities[$class][]= $this->entities[$class]->execute($this->mandango, $insertedEntities);
            }
        }
        $this->mandango->flush();

        return $insertedEntities;
    }
}
