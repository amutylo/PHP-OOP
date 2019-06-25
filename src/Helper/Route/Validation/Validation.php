<?php


namespace App\Helper\Route\Validation;

use App\Helper\Route\Validation\InterfaceValidator;
use App\Helper\Route\Route;

class Validation
{

  /**
   * @var array
   */
  private $validators;

  /**
   * @param array $validators
   */
  public function setValidators(array $validators) {
    foreach ($validators as $validator) {
      $this->validators[get_class($validator)] = $validator;
    }
  }
  

  /**
   * @param \App\Helper\Route\InterfaceValidator $interfaceValidation
   */
  public function addValidator(InterfaceValidator $interfaceValidator) {
    return $this->setValidators($interfaceValidator);
  }

  /**
   * @param string $className
   *
   * @return bool
   */
  public function hasValidator($className): bool {
    return key_exists($className, $this->validators);
  }
}

