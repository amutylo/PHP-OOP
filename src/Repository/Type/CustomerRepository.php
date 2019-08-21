<?php

namespace App\Repository\Type;

use App\DB\Connection;
use App\DB\QueryBuilder;
use App\Entity\Type\Customer;
use App\Hydration\CustomerHydrator;
use App\Repository\AbstractRepository;

class CustomerRepository extends AbstractRepository{

  /**
   * @var Connection
   */
  private $connection;

  public function __construct(Connection $connection) {
    $this->connection = $connection;
  }

  /**
   * @param \App\Entity\Type\Customer $entity
   *
   * @return \App\Entity\Type\Customer
   */
  public function save(Customer $entity) {
    $data = [
      'first_name' => $entity->getFirstName(),
      'last_name' => $entity->getLastName(),
      'company_name' => $entity->getCompanyName(),
    ];
    $table = 'customer';
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
      $entity->setId((int)$dbCon->lastInsertId());
    }
    return $entity;
  }

  /**
   * @inheritDoc
   */
  public function findAll(): array
  {
    $results = [];
    $sql = QueryBuilder::findAll('customer');
    $dbCon = $this->connection->open();
    $statement = $dbCon->prepare($sql);
    $statement->execute();
    $rows = $statement->fetchAll();
    if (is_array($rows)) {
      foreach ($rows as $row) {
        $results[] = CustomerHydrator::hydrate($row);
      }
    }
    return $results;
  }

  
  /**
   * @param int $id
   *
   * @return mixed
   */
  public function findOne(int $id) {

    $entity = null;
    $sql = QueryBuilder::findOneBy('customer');
    $dbCon = $this->connection->open();
    $statement = $dbCon->prepare($sql);
    $statement->execute([
      'id' => $id
    ]);
    $row = $statement->fetch();
    if ($row) {
      $entity = CustomerHydrator::hydrate($row);
    }
    return $entity;
  }
}
