<?php

namespace App\Manager;

use App\Manager\AbstractManager;
use App\Entity\Type\Status;
use App\Repository\Type\Status as Repository;

class StatusManager extends AbstractManager
{

  /**
   *
   * @var App\Repository\Type\Status
   */
  private $repo;


  public function getRepository($className)
  {
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
    $entity = $this->hydrator->hydrate($row);
    return $entity;
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

  public function
}