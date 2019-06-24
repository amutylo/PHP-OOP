<?php

namespace App\Helper\Route\Validation\Type;

class BaseType
{

  protected $route;
  public function __construct(route $route) {
    $this->route = $route;
    
  }
}