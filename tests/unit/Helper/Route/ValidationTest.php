<?php

namespace Helper\Route;

class ValidationTest extends \Codeception\Test\Unit
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
   * @group validation
   * @group validation-valid-home-page
   */
    public function testValidHomePage()
    {
      $route = new Route();
      $route->setController(Home::class)
        ->setMethod(['GET'])
        ->setPattern('/')
        ->setAction('index')
      ;

      $validator = new Validator();
      $isValid = $validator->isValid($route);
      
      $this->assertTrue($validator->isValid($route));
      
    }

  /**
   * @group validation
   * @group validation-invalid-home-page
   */
  public function testInValidHomePage()
  {
    $route = new Route();
    $route->setController(Home::class)
      ->setMethod(['GET'])
      ->setPattern('/')
      ->setAction('index')
    ;

    $validator = new Validator();

    $this->assertTrue($validator->validate($route));

  }
}