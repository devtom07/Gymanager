<?php

namespace Faker\ORM\Spot;

use Spot\Locator;

/**
 * Service class for populating a database using the Spot ORM.
 */
class Populator
{
    protected $generator;
    protected $locator;
<<<<<<< HEAD
    protected $entities = [];
    protected $quantities = [];
=======
    protected $entities = array();
    protected $quantities = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244

    /**
     * Populator constructor.
     * @param \Faker\Generator $generator
     * @param Locator|null $locator
     */
    public function __construct(\Faker\Generator $generator, Locator $locator = null)
    {
        $this->generator = $generator;
        $this->locator = $locator;
    }

    /**
     * Add an order for the generation of $number records for $entity.
     *
<<<<<<< HEAD
     * @param string $entityName Name of Entity object to generate
     * @param int $number The number of entities to populate
     * @param array $customColumnFormatters
     * @param array $customModifiers
     * @param bool $useExistingData Should we use existing rows (e.g. roles) to populate relations?
=======
     * @param $entityName string Name of Entity object to generate
     * @param $number int The number of entities to populate
     * @param $customColumnFormatters array
     * @param $customModifiers array
     * @param $useExistingData bool Should we use existing rows (e.g. roles) to populate relations?
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
     */
    public function addEntity(
        $entityName,
        $number,
<<<<<<< HEAD
        $customColumnFormatters = [],
        $customModifiers = [],
=======
        $customColumnFormatters = array(),
        $customModifiers = array(),
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        $useExistingData = false
    ) {
        $mapper = $this->locator->mapper($entityName);
        if (null === $mapper) {
            throw new \InvalidArgumentException("No mapper can be found for entity " . $entityName);
        }
        $entity = new EntityPopulator($mapper, $this->locator, $useExistingData);

        $entity->setColumnFormatters($entity->guessColumnFormatters($this->generator));
        if ($customColumnFormatters) {
            $entity->mergeColumnFormattersWith($customColumnFormatters);
        }
        $entity->mergeModifiersWith($customModifiers);

        $this->entities[$entityName] = $entity;
        $this->quantities[$entityName] = $number;
    }

    /**
     * Populate the database using all the Entity classes previously added.
     *
     * @param Locator $locator A Spot locator
     *
     * @return array A list of the inserted PKs
     */
    public function execute($locator = null)
    {
        if (null === $locator) {
            $locator = $this->locator;
        }
        if (null === $locator) {
            throw new \InvalidArgumentException("No entity manager passed to Spot Populator.");
        }

<<<<<<< HEAD
        $insertedEntities = [];
=======
        $insertedEntities = array();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
        foreach ($this->quantities as $entityName => $number) {
            for ($i = 0; $i < $number; $i++) {
                $insertedEntities[$entityName][] = $this->entities[$entityName]->execute(
                    $insertedEntities
                );
            }
        }

        return $insertedEntities;
    }
}
