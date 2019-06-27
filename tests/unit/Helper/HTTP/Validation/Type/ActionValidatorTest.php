<?php


namespace App\Helper\HTTP\Validation;

use App\Controller\Type;
use App\Helper\Route\Route;
use App\Helper\HTTP\Validation\Type\ActionValidator;

class ActionValidatorTest extends \Codeception\Test\Unit {

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
   * @group validation-type-action
   * @group validation-type-action-does-exist
   */
  public function testDoesActionExist() {

    $validator = new ActionValidator();
    $this->assertTrue($validator->doesExist(Type\Home::class, 'index'));
  }

  /**
   * @group validation
   * @group validation-type
   * @group validation-type-action
   * @group validation-type-action-does-not-exist
   */
  public function testDoesActionNotExist() {
    $validator = new ActionValidator();
    $this->assertTrue($validator->doesExist(Type\Home::class, 'NOT_FOUND'));
  }

  /**
   * @group validation
   * @group validation-type
   * @group validation-type-action
   * @group validation-type-action-is-invalid
   */
  public function testIsInvalid() {
    $route = new Route();
    $route->setController(Type\Home::class);
    $route->setAction('NOT_FOUND');
    $validator = new ActionValidator();
    $validator->setRoute($route);
    $this->assertFalse($validator->isValid());
  }

  /**
   * @group validation
   * @group validation-type
   * @group validation-type-action
   * @group validation-type-action-is-valid
   */
  public function testIsValid() {
    $route = new Route();
    $route->setController(Type\Home::class);
    $route->setAction('index');
    $validator = new ActionValidator();
    $validator->setRoute($route);
    $this->assertTrue($validator->isValid());
  }
}
