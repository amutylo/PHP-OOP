<?php


namespace App\Helper\HTTP\Validation\Type;

use ReflectionClass;
use ReflectionException;
use App\Helper\HTTP\Validation\InterfaceValidator;
use App\Helper\HTTP\Validation\AbstractType;

class ControllerValidator extends AbstractType implements InterfaceValidator {

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid(): bool {
    $isValid = false;
    $className = $this->route->getController();
    if (false === empty($className)) {
      $isValid = $this->doesExist($className);
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

