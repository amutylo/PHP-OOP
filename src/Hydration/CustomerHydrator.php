<?php
namespace App\Hydration;

use App\Entity\Type\Customer;

class CustomerHydrator extends AbstractHydrator
{
  public static function hydrate(array $data): Customer
  {
    $entity = new Customer();
    $entity->setCompanyName($data['company_name']);
    $entity->setFirstName($data['first_name']);
    $entity->setLastName($data['last_name']);
    $entity = parent::hydrateRest($data, $entity);
    
    return $entity;
  }

}