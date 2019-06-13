<?php

namespace Helper\Route;

use Exception;

class Router
{

  /**
   * @var array
   */
  private $routes = [];

  /**
   * @param \Helper\Route\Route $route
   *
   * @return $this
   */
  public function register (Route $route)
  {
    $this->routes[$route->getPattern()] = $route;
    return $this;
  }

  public function process(string $currentUri)
  {
    if (false === isset($this->routes[$currentUri])) {
      throw new Exception('Cannot find route for ' . $currentUri, 404);
    }
    return $this->routes[$currentUri];
  }
}
