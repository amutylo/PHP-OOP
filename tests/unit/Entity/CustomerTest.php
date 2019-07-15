<?php
namespace App\Entity;

use App\Entity\Type\Customer;

class CustomerTest extends \Codeception\Test\Unit
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
   * @group entity
   * @group customer
   * @group customer-default
   */
  public function testStatusDefault()
  {
    $customer = new Customer();
    $this->assertEmpty($customer->getName());
    $this->assertIsString($customer->getName());
    $this->assertEmpty($customer->getFirstName());
    $this->assertIsString($customer->getFirstName());
    $this->assertEmpty($customer->getLastName());
    $this->assertIsString($customer->getLastName());
    $this->assertEmpty($customer->getCompanyName());
    $this->assertIsString($customer->getCompanyName());
    $this->assertEmpty((string) $customer);
  }

  /**
   * @group entity
   * @group customer
   * @group customer-set-company-name
   */
  public function testSetCompanyName()
  {
    $customer = new Customer();
    $customer->setCompanyName('How to code well');
    $this->assertSame('How to code well', $customer->getCompanyName());
  }

  /**
   * @group entity
   * @group customer
   * @group customer-set-first-name
   */
  public function testSetFirstName()
  {
    $customer = new Customer();
    $customer->setFirstName('Peter');
    $this->assertSame('Peter', $customer->getFirstName());
    $this->assertSame('Peter', (string) $customer);
  }

  /**
   * @group entity
   * @group customer
   * @group customer-set-last-name
   */
  public function testSetLastName()
  {
    $customer = new Customer();
    $customer->setLastName('Fisher');
    $this->assertSame('Fisher', $customer->getLastName());
    $this->assertSame('Fisher', (string) $customer);
  }

  /**
   * @group entity
   * @group customer
   * @group customer-full-name
   */
  public function testSetFullName()
  {
    $customer = new Customer();
    $customer->setFirstName('Peter');
    $customer->setLastName('Fisher');
    $this->assertSame('Peter Fisher', (string) $customer);
  }
}
