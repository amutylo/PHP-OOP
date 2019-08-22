<?php
namespace App\Repository;

abstract class AbstractRepository
{

  /**
   * Find one entity by id.
   *
   * @param int $id
   *
   * @return mixed
   */
  abstract public function findOne(int $id);

  /**
   *  Find all entities.
   * @return array
   */
  abstract public function findAll(): array;
}
