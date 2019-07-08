<?php
namespace App\Entity;

use App\Entity\Type\Invoice;
use App\Entity\Type\InvoiceItem;

class AddInvoiceTestToInvoiceTest extends \Codeception\Test\Unit
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
   * @group invoice-add-item
   * @group invoice-add-item-default
   */
  public function testDefault()
  {
    $invoiceItem = new InvoiceItem();
    $invoice = new Invoice();
    $invoice->addItem($invoiceItem);
    $this->assertInstanceOf(Invoice::class, $invoice);
  }

  /**
   * @group entity
   * @group invoice-add-item
   * @group invoice-add-item-set-items
   */
  public function testSetItems()
  {
    $invoiceItem1 = new InvoiceItem();
    $invoiceItem2 = new InvoiceItem();
    $invoice = new Invoice();
    $invoice->setItems([$invoiceItem1]);
    $invoice->setItems([$invoiceItem2]);
    $this->assertContains($invoiceItem2, $invoice->getItems());
    $this->assertCount(1, $invoice->getItems());
    $this->assertInstanceOf(Invoice::class, $invoice);
  }

  /**
   * @group entity
   * @group invoice-add-item
   * @group invoice-add-item-reset-items
   */
  public function testResetItems()
  {
    $invoiceItem1 = new InvoiceItem();
    $invoiceItem2 = new InvoiceItem();
    $invoice = new Invoice();
    $invoice->setItems([$invoiceItem1]);
    $invoice->resetItems();
    $this->assertEmpty($invoice->getItems());
    $this->assertInstanceOf(Invoice::class, $invoice);
  }

  /**
   * @group entity
   * @group invoice-add-item
   * @group invoice-add-item-does-contain-items
   */
  public function testDoesContainItems()
  {
    $invoiceItem = new InvoiceItem();
    $invoice = new Invoice();
    $invoice->addItem($invoiceItem);
    $doesItemsContain = $invoice->doesItemsContain($invoiceItem);

    $this->assertTrue($doesItemsContain);
    $this->assertInstanceOf(Invoice::class, $invoice);
  }

  /**
  * @group entity
  * @group invoice-add-item
  * @group invoice-add-item-does-contain-items
  */
  public function testDoesNotContainItems()
  {
    $invoiceItem = new InvoiceItem();
    $invoice = new Invoice();
    //Keep blank array do not add any item.
    //$invoice->addItem($invoiceItem);
    $doesItemsContain = $invoice->doesItemsContain($invoiceItem);

    $this->assertFalse($doesItemsContain);
    $this->assertInstanceOf(Invoice::class, $invoice);
  }

  /**
   * @group entity
   * @group invoice-add-item
   * @group invoice-add-item-set-the-same
   */
  public function testSetTheSame()
  {
    $invoiceItem = new InvoiceItem();
    $invoice = new Invoice();
    $invoice->setItems([$invoiceItem, $invoiceItem]);
    
    $this->assertCount(1, $invoice->getItems());
    $this->assertInstanceOf(Invoice::class, $invoice);
  }
}
