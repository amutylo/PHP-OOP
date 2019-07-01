<?php

namespace Helper\Route;

use App\Controller\Type\Home;
use App\Helper\Route\Route;
use App\Helper\Route\Router;

class RouterTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }



  /**
   *
   * @group router
   * @group router-default
   */
  public function testDefaults()
  {
    $router = new Router();
    $this->assertIsArray($router->getRoutes());
    $this->assertEquals(0, count($router->getRoutes()));
  }
  /**
  *
  * @group router
  * @group router-routes-array
  */
  public function testIsRoutesAnArray()
  {
    $router = new Router();
    $this->assertIsArray($router->getRoutes());
  }

  /**
   *
   * @group router
   * @group router-add-route
   */
  public function testAddRoute()
  {
    $route = new Route();
    $route->setPattern('/')
      ->setMethods(['GET'])
      ->setController(Home::class)
      ->setAction('index')
    ;
    $router = new Router();
    $router::add($route);
    
    $this->assertIsArray($router->getRoutes());
    $this->assertEquals(1, count($router->getRoutes()));
  }

  /**
   *
   * @group router
   * @group router-add-route
   */
  public function testAddDuplicateRoute()
  {
    $route = new Route();
    $route->setPattern('/')
      ->setMethods(['GET'])
      ->setController(Home::class)
      ->setAction('index')
    ;
    $router = new Router();
    $router::add($route);
    $router::add($route);

    $this->assertIsArray($router->getRoutes());
    $this->assertEquals(1, count($router->getRoutes()));
  }
}