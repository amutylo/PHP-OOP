<?php
namespace App\Entity\Type;

use App\Entity\AbstractEntity;

class Status extends AbstractEntity implements GenericEntityInterface
{
    /**
     * @var string
     */
    private $internalName = '';

    /**
     * @var null
     */
    private $name = '';

  /**
   * @return string
   */
  public function getInternalName(): string
  {
    return str_replace('_', ' ', $this->internalName);
  }

  /**
   * @param string $internalName
   *
   * @return Status
   */
  public function setInternalName(string $internalName): Status
  {
    $this->internalName = strtoupper(str_replace('', '_', $internalName));
    return $this;
  }

  /**
   * @return string
   */
  public function getName():string
  {
    return $this->name;
  }

  /**
   * @param $name
   *
   * @return Status
   */
  public function setName($name): Status
  {
    $this->name = $name;
    $this->internalName = strtoupper($name);
    return $this;
  }
  
}