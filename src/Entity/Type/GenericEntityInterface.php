<?php

namespace App\Entity\Type;

use App\Entity\AbstractEntity;

interface GenericEntityInterface
{

  /**
   * @return int
   */
  public function getId(): ?int;


  /**
   * @param int $id
   * @return AbstractEntity
   */
  public function setId(?int $id);


  /**
   * @return DateTime
   */
  public function getDateCreated(): DateTime;


  /**
   * @param DateTime $dateCreated
   * @return AbstractEntity
   */
  public function setDateCreated(DateTime $dateCreated);
  
  /**
   * @return DateTime
   */
  public function getDateUpdated(): DateTime;

  /**
   * @param DateTime $dateUpdated
   * @return AbstractEntity
   */
  public function setDateUpdated(DateTime $dateUpdated);
  
}
