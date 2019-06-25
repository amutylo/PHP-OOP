<?php

namespace App\Helper\Route\Validation;

use App\Helper\Route\Route;

abstract class AbstractType
{

  /**
   * @var \App\Helper\Route\Route 
   */
  protected $route;


  /**
   * @param \App\Helper\Route\Route $route
   */
  public function setRoute(Route $route)
  {
    $this->route = $route;
  }
}