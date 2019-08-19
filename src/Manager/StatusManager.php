<?php

namespace App\Manager;

use App\DB\Connection;
use App\Hydration\StatusHydrator;
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

  private $connection;

  public function __construct(Connection $connection)
  {
    $this->connection = $connection;
  }

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
    if (null === $entity->getId()) {
      $sql = "INSERT INTO `status` (`name`, `internal_name`) VALUE (?,?);";
      $data = [
        $entity->getName(),
        $entity->getInternalName()
      ];
    }
    else {
      $sql = 'UPDATE `status` SET `name` = ?, `internal_name` = ? WHERE `id` = ?;';
      $data = [
        $entity->getName(),
        $entity->getInternalName(),
        $entity->getId()
      ];
    }
    $dbCon = $this->connection->open();
    $dbCon->prepare($sql);
    $dbCon->execute($data);
  }
}