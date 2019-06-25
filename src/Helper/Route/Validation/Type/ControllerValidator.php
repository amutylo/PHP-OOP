<?php


namespace App\Helper\Route\Validation\Type;

use ReflectionClass;
use ReflectionException;
use App\Helper\Route\Validation\InterfaceValidator;
use App\Helper\Route\Validation\AbstractType;

class ControllerValidator extends AbstractType implements InterfaceValidator {

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid(): bool {
    // TODO: Implement isValid() method.
    $isValid = false;
    $className = $this->route->getController();
    if (false === empty($className)) {
      $this->doesExist($className);
    }
    return $isValid;
  }

  public function doesExist(string $value):bool {
    $isValid = true;
    try {
      $r = new ReflectionClass($value);
    } catch (ReflectionException $e) {
      $isValid = false;
    }
    return $isValid;
  }
}

