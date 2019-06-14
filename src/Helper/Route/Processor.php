<?php

namespace Helper\Route;

use Exception;

class Processor
{

  /**
   * @param \Helper\Route\Router $router
   * @param string $currentUri
   *
   * @return mixed
   * @throws \Exception
   */
  public function process (Router $router, string $currentUri)
  {
    $knownRoute = $router->process($currentUri);

    $controllerName = $knownRoute->getController();
    $controller = new $controllerName();
    $method = $knownRoute->getMethod();

    return $controller->{$method}();
  }

  /**
   * @param array $routes
   *
   * @return \Helper\Route\Router
   */
  public function make(array $routes): Router
  {

    $router = new Router();
    foreach ($routes as $routeData) {
      $route = new Route($routeData);
      $router->register($route);
    }
    return $router;
  }
}
