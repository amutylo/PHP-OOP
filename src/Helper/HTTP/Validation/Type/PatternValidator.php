<?php

namespace App\Helper\HTTP\Validation\Type;

use App\Helper\HTTP\Validation\InterfaceValidator;
use App\Helper\HTTP\Validation\AbstractType;

class PatternValidator extends AbstractType implements InterfaceValidator 
{

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid(): bool {
    return empty($this->route->getPattern());
  }
  
}
