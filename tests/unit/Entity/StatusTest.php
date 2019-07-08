<?php
namespace App\Entity;

use App\Entity\Type\Status;

class StatusTest extends \Codeception\Test\Unit
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
   * @group status
   * @group status-default
   */
  public function testStatusDefault()
  {
    $status = new Status();
    $this->assertEmpty($status->getName());
    $this->assertIsString($status->getName());
    $this->assertEmpty($status->getInternalName());
    $this->assertIsString($status->getInternalName());

  }

  /**
   * @group entity
   * @group status
   * @group status-set-name
   */
  public function testSetName()
  {
    $status = new Status();
    $status->setName('draft');

    $this->assertInstanceOf(Status::class, $status);
    $this->assertSame('draft', $status->getName());
    $this->assertSame('DRAFT', $status->getInternalName());
  }

  /**
   * @group entity
   * @group status
   * @group status-set-name-with-spaces
   */
  public function testSetInternalNameWithSpaces()
  {
    $status = new Status();
    $status->setInternalName('under review');

    $this->assertInstanceOf(Status::class, $status);
    $this->assertSame('UNDER REVIEW', $status->getInternalName());
    
  }
}
