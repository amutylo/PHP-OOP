<?php
namespace App\Entity;


use App\Entity\Type\InvoiceItem;

class InvoiceItemTest extends \Codeception\Test\Unit
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
   * @group invoice-item
   * @group invoice-item-default
   */
  public function testDefault()
  {
    $invoiceItem = new InvoiceItem();
    $this->assertEmpty($invoiceItem->getDescription());
    $this->assertIsString($invoiceItem->getDescription());
    $this->assertIsFloat($invoiceItem->getUnitPrice());
    $this->assertSame(0.0, $invoiceItem->getUnitPrice());
    $this->assertIsInt($invoiceItem->getUnits());
    $this->assertSame(0, $invoiceItem->getUnits());
    $this->assertIsString($invoiceItem->getReference());
    $this->assertIsFloat($invoiceItem->getTotal());
    $this->assertSame(0.0, $invoiceItem->getTotal());
  }

  /**
   * @group entity
   * @group invoice-item
   * @group invoice-item-description
   */
  public function testDescription()
  {
    $invoiceItem = new InvoiceItem();
    $item = $invoiceItem->setDescription('Test invoice item.');

    $this->assertInstanceOf(InvoiceItem::class, $item);
    $this->assertSame('Test invoice item.', $invoiceItem->getDescription());
  }

  /**
   * @group entity
   * @group entity
   * @group invoice-item
   * @group invoice-item-reference
   */
  public function testReference()
  {
    $invoiceItem = new InvoiceItem();
    $item = $invoiceItem->setReference('Test invoice item reference.');

    $this->assertInstanceOf(InvoiceItem::class, $item);
    $this->assertSame('Test invoice item reference.', $invoiceItem->getReference());
  }

  /**
   * @group entity
   * @group entity
   * @group invoice-item
   * @group invoice-item-units
   */
  public function testUnits()
  {
    $invoiceItem = new InvoiceItem();
    $item = $invoiceItem->setUnits(4);

    $this->assertInstanceOf(InvoiceItem::class, $item);
    $this->assertSame(4, $invoiceItem->getUnits());
  }

  /**
   * @group entity
   * @group entity
   * @group invoice-item
   * @group invoice-item-unit-price
   */
  public function testUnitPrice()
  {
    $invoiceItem = new InvoiceItem();
    $item = $invoiceItem->setUnitPrice(200.53);

    $this->assertInstanceOf(InvoiceItem::class, $item);
    $this->assertSame(200.53, $invoiceItem->getUnitPrice());
  }

  /**
   * @group entity
   * @group entity
   * @group invoice-item
   * @group invoice-item-unit-total
   */
  public function testUnitTotal()
  {
    $invoiceItem = new InvoiceItem();
    $item = $invoiceItem->setTotal(2200.53);

    $this->assertInstanceOf(InvoiceItem::class, $item);
    $this->assertSame(2200.53, $invoiceItem->getTotal());
  }
}
