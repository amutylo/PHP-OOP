<?php
namespace App\Entity\Type;

use App\Entity\AbstractEntity;

class InvoiceItem extends AbstractEntity
{
    /**
     * @var string
     */
    private $reference = '';

  /**
   * @var int 
   */
    private $units = 0;
    

    /**
     * @var float
     */
    private $total = 0.0;

  /**
   * @var float 
   */
    private $unitPrice = 0.0;


  /**
   * @return int
   */
  public function getUnits(): int 
  {
    return $this->units;
  }

  /**
   * @param int $units
   *
   * @return InvoiceItem
   */
  public function setUnits(int $units): InvoiceItem
  {
    $this->units = $units;
    return $this;
  }

  /**
   * @return float
   */
  public function getTotal(): float
  {
    return $this->total;
  }

  /**
   * @param float $total
   *
   * @return InvoiceItem
   */
  public function setTotal(float $total): InvoiceItem
  {
    $this->total = $total;
    return $this;
  }

  /**
   * @return string
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * @param string $description
   *
   * @return InvoiceItem
   */
  public function setDescription(string $description): InvoiceItem
  {
    $this->description = $description;
    return $this;
  }

   /**
   * @var string 
   */
    private $description = '';

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }
    

    /**
     * @param string $reference
     *
     * @return InvoiceItem
     */
    public function setReference(string $reference): InvoiceItem
    {
        $this->reference = $reference;
        return $this;
    }

  /**
   * @return float
   */
  public function getUnitPrice(): float {
    return $this->unitPrice;
  }

  /**
   * @param float $unitPrice
   *
   * @return InvoiceItem
   */
  public function setUnitPrice(float $unitPrice): InvoiceItem {
    $this->unitPrice = $unitPrice;
    return $this;
  }
    
}