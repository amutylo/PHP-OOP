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


  public function __construct(CustomerRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param int $id
   *
   * @return \App\Entity\Type\Customer
   */
  public function findOne(int $id):? Customer
  {
    $entity = $this->repository->findOne($id);
    return $entity;
  }

  /**
   * @return array
   */
  public function findAll(): array
  {
     return $this->repository->findAll();
  }

  public function save(Customer $entity)
  {
    $savedEntity = $this->repository->save($entity);
    return $savedEntity;
  }
}