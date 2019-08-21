<?php

namespace App\Manager;

use App\DB\Connection;
use App\Hydration\StatusHydrator;
use App\Manager\AbstractManager;
use App\Entity\Type\Status;
use App\Repository\Type\StatusRepository;

class StatusManager extends AbstractManager
{

  /**
   *
   * @var App\Repository\Type\StatusRepository
   */
  private $repository;

  public function __construct( StatusRepository $repository)
  {
    $this->repository = $repository;
  }


  /**
   * @param int $id
   *
   * @return \App\Entity\Type\Status|null
   */
  public function findOne(int $id):? Status
  {
    $entity = $this->repository->findOne($id);
    return $entity;
  }

  /**
   * @return array
   */
  public function findAll()
  {
    return $this->repository->findAll();
  }

  /**
   * @param \App\Entity\Type\Status $entity
   *
   * @return \App\Entity\Type\Status
   */
  public function save(Status $entity):Status
  {
    $savedEntity = $this->repository->save($entity);
    return $savedEntity;
  }
}