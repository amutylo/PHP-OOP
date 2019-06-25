<?php

namespace  App\Helper\Route;

interface InterfaceValidator
{

  /**
   * @return bool
   */
  public function isValid():bool;

  /**
   * @param Route $route
   *
   * @return mixed
   */
  public function setRoute(Route $route);
}