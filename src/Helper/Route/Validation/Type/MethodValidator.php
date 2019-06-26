<?php

namespace App\Helper\Route\Validation\Type;

use  App\Helper\Route\Validation\InterfaceValidator;
use App\Helper\Route\Validation\AbstractType;

class MethodValidator extends AbstractType implements InterfaceValidator
{

  /**
   * @param mixed $value
   *
   * @return bool
   */
  public function isValid(): bool
  {
    $isValid = FALSE; 
    $value = $this->route->getMethod();
    if (is_array($value)) {
      $this->isValueCorrect($value);
    }
    return $isValid;
  }

  /**
   * @param array $values
   *
   * @return bool
   */
  public function isValueCorrect(array $values)
  {
    $possible = [
      'GET',
      'POST'
    ];
    foreach ($values as $value) {
      if (FALSE === in_array($value, $possible)) {
        return FALSE;
      }
    }
    return TRUE;
  }
  
}
