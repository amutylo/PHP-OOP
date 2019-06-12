<?php

namespace Repository;

abstract class AbstractRepository {
  abstract public function save();
  abstract public function findOne();
  abstract public function findOneBy();
  abstract public function findAllBy();
}
