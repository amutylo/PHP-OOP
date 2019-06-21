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
   * 
   * @throws \Exception
   */
  public function run (Router $router, string $currentUri)
  {
    $parsedUrl = parse_url($currentUri);
    $path = $parsedUrl['path'];

    foreach ($router->getRoutes() as $pattern => $route) {
      
      if (FALSE === $route instanceof Route) {
        throw new Exception('This is not a route'); 
      }
      
      if (preg_match('#^' . $pattern . '$#', $path, $matches)) {
        $controllerName = $route->getController();
        $controller = new $controllerName();

        break;
      }
    }

    return $controller->{$route->getMethod()}();
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
