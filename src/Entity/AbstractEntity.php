<?php

namespace App\Entity;

use DateTime;

abstract class AbstractEntity
{
  protected $id;

  protected $dateCreated;

  protected $dateUpdated;

  protected function getId(): ?int
  {
    return $this->id;
  }

  public function setId(?int $id): AbstractEntity
  {
    $this->id = $id;
    return $this;
  }

  public function dateCreated(): ?DateTime
  {
    return $this->dateCreated;
  }

  public function dateUpdated(): ?DateTime
  {
    return $this->dateUpdated;
  }
}
