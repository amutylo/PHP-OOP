<?php


namespace App\Helper\HTTP\Validation\Type;

use  App\Helper\HTTP\Validation\InterfaceValidator;
use App\Helper\HTTP\Validation\AbstractType;
use ReflectionMethod;
use ReflectionException;

class ActionValidator extends AbstractType implements InterfaceValidator {

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid(): bool {
    $className = $this->route->getController();
    $actionName = $this->route->getAction();
    $isValid = false;
    if (false === empty($className)
      && false === empty($actionName)) {
      $isValid = $this->doesExist($className, $actionName);
    }
    return $isValid;
  }

  /**
   * @return bool
   */
  public function doesExist(string $className, string $actionName): bool {
    $isValid = true;
    try {
      $r = new ReflectionMethod($className, $actionName);
    } catch (ReflectionException $e) {
      $isValid = false;
    }
    return $isValid;
  }
}

