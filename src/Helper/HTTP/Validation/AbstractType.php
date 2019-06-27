<?php

namespace App\Helper\HTTP\Validation;

use App\Helper\Route\Route;

abstract class AbstractType
{

  /**
   * @var \App\Helper\Route\Route 
   */
  protected $route;


  /**
   * @param Route $route
   */
  public function setRoute(Route $route)
  {
    $this->route = $route;
  }
}