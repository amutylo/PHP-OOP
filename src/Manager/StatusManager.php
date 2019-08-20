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

  private $connection;

  public function __construct(Connection $connection, StatusRepository $repository)
  {
    $this->connection = $connection;
    $this->repository = $repository;
  }
  

  /**
   * [findOne description]
   *
   * @param   int     $id  [$id description]
   *
   * @return  Status       [return description]
   */
  public function findOne(int $id):? Status
  {
    $row = $this->repository->findOne($id);
    return StatusHydrator::hydrate($row);
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

  public function save(Status $entity):Status
  {
    $savedEntity = $this->repository->save($entity);
    return $savedEntity;
  }
}