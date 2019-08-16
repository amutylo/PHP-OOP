<?php
namespace App\Hydration;

use App\Entity\AbstractEntity;
use App\Entity\Type\Status;


class StatusHydrator extends AbstractHydrator
{
  public static function hydrate(array $data): AbstractEntity
  {
    $entity = new Status();
    $entity->setName($data['name']);
    $entity->setInternalName($data['internal_name']);
    $entity = parent::hydrateRest($data, $entity);
    
    return $entity;
  }

}