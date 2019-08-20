<?php

namespace Repository\Type;

use App\DB\QueryBuilder;
use App\Entity\Type\Status;
use App\Repository\AbstractRepository;

class StatusRepository extends AbstractRepository {

  /**
   * @param \Repository\Type\int $id
   */
  public function findOne(int $id) {
    // TODO: Implement findOne() method.
  }

  /**
   * @param array $options
   */
  public function findAllBy(array $options) {
    // TODO: Implement findAllBy() method.
  }

  /**
   * @param array $options
   */
  public function findOneBy(array $options) {
    // TODO: Implement findOneBy() method.
  }

  /**
   * @param Status $entity
   * @return Status
   */
  public function save(Status $entity) {
    $data = [
      'name' => $entity->getName(),
      'internal_name' => $entity->getInternalName(),
    ];
    $table = 'status';
    $where = [];
    if (null !== $entity->getId()) {
      $where['id'] = $entity->getId();
    }
    $sql = QueryBuilder::insertOrUpdate($data, $table, $where);
    if (null !== $entity->getId()) {
      $data['id'] = $entity->getId();
    }
    $dbCon = $this->connection->open();
    $statement = $dbCon->prepare($sql);
    $statement->execute(array_values($data));
    if (null === $entity->getId()) {
      $entity->setId((int) $dbCon->lastInsertId());
    }
    return $entity;
  }

}
