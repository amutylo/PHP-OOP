<?php

namespace App\Helper\HTTP\Validation\Type;

use App\Helper\HTTP\Validation\InterfaceValidator;
use App\Helper\HTTP\Validation\AbstractType;
use App\Helper\Route\Route;

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
    $value = $this->route->getMethods();
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
