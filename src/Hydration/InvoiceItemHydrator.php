<?php
namespace App\Hydration;

use App\Entity\AbstractEntity;
use App\Entity\Type\Invoice;
use App\Entity\Type\InvoiceItem;


class InvoiceItemHydrator extends AbstractHydrator
{
  public static function hydrate(array $data): InvoiceItem
  {
    $entity = new InvoiceItem();
    $entity->setReference($data['reference']);
    $entity->setDescription($data['description']);
    $entity->setTotal($data['total']);
    $entity->setUnitPrice($data['unit_price']);
    $entity->setUnits($data['units']);
    $entity = parent::hydrateRest($data, $entity);
    
    return $entity;
  }

}