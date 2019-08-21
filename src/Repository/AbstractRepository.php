<?php
namespace App\Repository;

abstract class AbstractRepository
{

  /**
   * @param int $id
   *
   * @return mixed
   */
  abstract public function findOne(int $id);

  /**
   * @return array
   */
  abstract public function findAll(): array;
}
