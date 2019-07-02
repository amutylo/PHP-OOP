<?php

namespace App\Helper\Route;

use App\Helper\Route\Route;

class Factory
{

  /**
   * @var 
   */
  private $routes;


  /**
   * @param array $routes
   *
   * @return array
   */
  public function makeRoutes(array $routes): array
  {
    foreach ($routes as $routeData) {
      $this->routes[] = $this->addRoute($routeData);
    }
    return $this->routes;
  }
  
  
  /**
   * @param array $options
   *
   * @return Route
   */
  public function addRoute(array $options):?Route
  {

    $route = new Route();

    $route->setController($options['controller'])
      ->setAction($options['action'])
      ->setMethods([$options['method']])
      ->setPattern($options['pattern'])
    ;
    
    return $route;
  }
}
