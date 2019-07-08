<?php
namespace App\Entity;

use App\Entity\Type\Invoice;
use App\Entity\Type\Status;

class SetStatusToInvoiceTest extends \Codeception\Test\Unit
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
   * @group status-to-invoice
   * @group status-to-invoice-default
   */
  public function testStatusDefault()
  {
    $status = new Status();
    $status->setName('draft');
    $invoice = new Invoice();
    $invoice->setStatus($status);
    
    $this->assertInstanceOf(Status::class, $status);
    $this->assertSame('draft', $invoice->getStatus()->getName());

  }

  
}
