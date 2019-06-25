<?php


namespace App\Helper\Route\Validation\Type;

use  App\Helper\Route\Validation\InterfaceValidator;
use App\Helper\Route\Validation\AbstractType;

class ControllerValidator extends AbstractType implements InterfaceValidator {

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid(): bool {
    // TODO: Implement isValid() method.
  }
}

