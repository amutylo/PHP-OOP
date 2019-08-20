<?php

namespace App\Manager;

use App\DB\Connection;
use App\Hydration\InvoiceHydrator;
use App\Manager\AbstractManager;
use App\Entity\Type\Invoice;
use App\Repository\Type\InvoiceRepository;

class InvoiceManager extends AbstractManager
{

  /**
   *
   * @var App\Repository\Type\Status
   */
  private $repository;

  private $connection;


  public function __construct(Connection $connection, InvoiceRepository $repository)
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