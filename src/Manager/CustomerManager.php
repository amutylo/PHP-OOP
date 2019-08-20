<?php

namespace App\Manager;

use App\DB\Connection;
use App\Entity\Type\Customer;
use App\Hydration\CustomerHydrator;
use App\Manager\AbstractManager;
use App\Entity\Type\Status;
use App\Repository\Type\CustomerRepositorys;

class CustomerManager extends AbstractManager
{

  /**
   *
   * @var App\Repository\Type\Status
   */
  private $repository;

  private $connection;

  public function __construct(Connection $connection, CustomerRepository $repository)
  {
    $this->connection = $connection;
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

  public function save(Customer $entity):Customer
  {
    if (null === $entity->getId()) {
      $sql = "INSERT INTO `customer` (`first_name`, `last_name`, `company_name`) VALUE (?,?);";
      $data = [
        $entity->getFirstName(),
        $entity->getLastName(),
        $entity->getCompanyName()
      ];
    }
    else {
      $sql = 'UPDATE `customer` SET `first_name` = ?, `last_name` = ?, `company_name` = ? WHERE `id` = ?;';
      $data = [
        $entity->getFirstName(),
        $entity->getLastName(),
        $entity->getCompanyName(),
        $entity->getId()
      ];
    }
    $dbCon = $this->connection->open();
    $dbCon->prepare($sql);
    $dbCon->execute($data);
  }
}