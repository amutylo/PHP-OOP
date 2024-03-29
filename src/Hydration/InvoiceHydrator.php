<?php
namespace App\Hydration;

use App\Entity\Type\Invoice;


class InvoiceHydrator extends AbstractHydrator
{
  public static function hydrate(array $data): Invoice
  {
    $entity = new Invoice();
    $entity->setReference($data['reference']);
    $entity->setTotal($data['total']);
    $entity->setVAT($data['vat']);
    $entity = parent::hydrateRest($data, $entity);
    
    return $entity;
  }

}