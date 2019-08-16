<?php
namespace App\Entity\Type;

use App\Entity\AbstractEntity;

class Customer extends AbstractEntity implements GenericEntityInterface
{
  /**
  * @var string
  */
  private $name = '';

  /**
  * @var string
  */
  private $firstName = '';

  /**
  * @var string
  */
  private $lastName = '';

  /**
   * @var string 
   */
  private $companyName = '';


  /**
   * @return string
   */
  public function __toString(): string
  {
    $names = [];
    if (!empty($this->firstName)) {
      $names[] = $this->firstName;
    }

    if (!empty($this->lastName)) {
      $names[] = $this->lastName;
    }
    return implode(' ', $names);
  }

  

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @param string $name
   *
   * @return \App\Entity\Type\Customer
   */
  public function setName(string $name): Customer
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getFirstName(): string {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   *
   * @return Customer
   */
  public function setFirstName(string $firstName): Customer
  {
    $this->firstName = $firstName;
    return $this;
  }

  /**
   * @return string
   */
  public function getLastName(): string {
    return $this->lastName;
  }

  /**
   * @param string $lastName
   *
   * @return Customer
   */
  public function setLastName(string $lastName): Customer
  {
    $this->lastName = $lastName;
    return $this;
  }

  /**
   * @return string
   */
  public function getCompanyName(): string {
    return $this->companyName;
  }

  /**
   * @param string $companyName
   *
   * @return Customer
   */
  public function setCompanyName(string $companyName): Customer
  {
    $this->companyName = $companyName;
    return $this;
  }


  
}