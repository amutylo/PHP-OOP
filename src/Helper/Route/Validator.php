<?php

namespace App\Helper\Route;

use App\Helper\Route\Validation\Validation;
use Exception;

class Validator
{

  private $validation;

  public function __construct(Validation $validation)
  {
    $this->validation = $validation;
  }

  /**
   * @param array $routes
   * @param Validation $validation
   *
   * @return bool
   * 
   * @throws \Exception
   */
  public static function validate(array $routes, Validation $validation): bool
  {
    $isValid = false;
    foreach ($routes as $route) {
      $isValid = $validation->validate($route);
      if (false === $isValid) {
        throw new Exception('Validator failed ' . get_class($route));
        break;
      }
    }
    
    return $isValid;
  }
  
}
