<?php
namespace App\Helper\HTTP\Locator;

use App\Helper\HTTP\Request\Request;
use \App\Helper\HTTP\Route\Route;

class Locator
{

  /**
   * @var \App\Helper\HTTP\Request\Request
   */
  private $request;

  /**
   * @var array
   */
  private $routes;

  const DELIMITER = '#';

  /**
   * Locator constructor.
   *
   * @param Request $request
   * @param array $routes
   */
  public function __construct(Request $request, array $routes = [])
  {
    $this->request = $request;
    
    $this->routes = $routes;
  }


  public static function createPattern(Route $route): string
  {
     return self::DELIMITER . '^' . $route->getPattern() . '$' . self::DELIMITER;
  }

  public function routeMatch(Route $routeToCheck, string $queryString)
  {
    $foundRoute = null;

    preg_match(self::createPattern($routeToCheck), $queryString, $matches);
    if (false === empty($matches)) {
      return $matches;
    }
    
  }
  
  /**
   * @return Route|null
   */
  public function locate():?Route
  {
    $foundRoute = null;

    $queryString = $this->request->getPath();

    foreach ($this->routes as $route) {
      $matches = $this->routeMatch($route, $queryString);
      if (false=== empty($matches)) {
        $this->request->setParameters($matches);
        $foundRoute = $route;
        break;
      }
    }
    return $foundRoute;
  }

}
