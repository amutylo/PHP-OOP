<?php


namespace Helper\Route\Validation;

use App\Helper\Route\Validation\Type\MethodValidator;

class MethodValidatorTest extends \Codeception\Test\Unit {

  /**
   * @var \UnitTester
   */
  protected $tester;

  protected function _before() {
  }

  protected function _after() {
  }


  /**
   * @group validation
   * @group validation-type
   * @group validation-type-method
   * @group validation-type-method-is-upper-case
   */
  public function testIsUpperCaseGet() {
    $route = new Route();
    $route->setController(Home::class)
      ->setMethods(['GET'])
    ;
    $validator = new MethodValidator();
    $validator->setRoute($route);

    $this->assertTrue($validator->isValid());

  }

  /**
   * @group validation
   * @group validation-type
   * @group validation-type-method
   * @group validation-type-method-is-lower-case
   */
  public function testIsLowerCaseGet() {
    $route = new Route();
    $route->setController(Home::class)
      ->setMethods(['get'])
    ;
    $validator = new MethodValidator();
    $validator->setRoute($route);

    $this->assertTrue($validator->isValid());

  }

  /**
   * @group validation
   * @group validation-type
   * @group validation-type-method
   * @group validation-type-method-is-invalid
   */
  public function testIsInvalid() {
    $route = new Route();
    $route->setController(Home::class)
      ->setMethods(['this-should-not-work'])
    ;
    $validator = new MethodValidator();
    $validator->setRoute($route);

    $this->assertTrue($validator->isValid());

  }
  
}
