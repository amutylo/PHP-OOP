<?php

namespace App\Manager;

use App\Hydration\InvoiceHydrator;
use App\Manager\AbstractManager;
use App\Entity\Type\Invoice;
use App\Repository\Type\Status as Repository;

class InvoiceManager extends AbstractManager
{

  /**
   *
   * @var App\Repository\Type\Status
   */
  private $repo;


  public function getRepository($className)
  {
    $repository = '';
    return $repository;
  }

  /**
   * [findOne description]
   *
   * @param   int     $id  [$id description]
   *
   * @return  Status       [return description]
   */
  public function findOne(int $id): Status
  {
    $row = $this->repository->findOne($id);
    return InvoiceHydrator::hydrate($row);
  }

  /**
   * [findOneBy description]
   *
   * @param   array   $array  [$array description]
   *
   * @return  Status          [return description]
   */
  public function findOneBy(array $array): Status
  {

  }
  
}