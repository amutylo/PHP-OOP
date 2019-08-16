<?php

namespace App\Hydration;

use App\Entity\Type\GenericEntityInterface;

abstract class AbstractHydrator
{
  public static function hydrateRest(array $data, GenericEntityInterface $entity)
  {
    $dateCreated = new \DateTime($data['date_created']);
    $dateUpdated = new \DateTime($data['date_updated']);
    $entity->setDateCreated($dateCreated);
    $entity->setDateUpdated($dateUpdated);
    $entity->setId($data['id']);

    return $entity;
  }
}