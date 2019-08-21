<?php

namespace App\Manager;

use App\DB\Connection;
use App\Entity\Type\Customer;
use App\Hydration\CustomerHydrator;
use App\Manager\AbstractManager;
use App\Entity\Type\Status;
use App\Repository\Type\CustomerRepository;

class CustomerManager extends AbstractManager
{

  /**
   *
   * @var App\Repository\Type\Status
   */
  private $repository;

  private $connection;

  public function __construct(CustomerRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * [findOne description]
   *
   * @param   int     $id  [$id description]
   *
   * @return  Customer       [return description]
   */
  public function findOne(int $id): Customer
  {
    $row = $this->repository->findOne($id);
    return CustomerHydrator::hydrate($row);
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

  public function save(Customer $entity)
  {
    $savedEntity = $this->repository->save($entity);
    return $savedEntity;
  }
}