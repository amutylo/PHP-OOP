<?php

namespace App\Mapper;

use App\Entity\Type\Invoice;
use App\Hydration\CustomerHydrator;
use App\Hydration\InvoiceHydrator;
use App\Hydration\StatusHydrator;
use App\Repository\Type\Status;
use App\Repository\Type\Customer;

class InvoiceMapper
{
  private $structure = [
    'invoice' => [],
    'status' => [
      'ref_id' => 'status_id'
    ],
    'customer' => [
      'ref_id' => 'customer_id'
    ]
  ];

  private $statusRepo;
  private $customerRepo;

  public function __construct(Status $statusRepo, Customer $customerRepo) {
    $this->statusRepo = $statusRepo;
    $this->customerRepo = $customerRepo;
  }

  public function map(array $invoiceData)
  {
    $invoice = InvoiceHydrator::hydrate($invoiceData);
    foreach($this->structure as $tableName => $refField) {
      $id = $invoiceData[$refField];
      $statusData = $this->statusRepo->findOne($id);
      $status = StatusHydrator::hydrate($statusData);
      $invoice->setStatus($status);

      $customerData = $this->customerRepo->findOne($id);
      $customer = CustomerHydrator::hydrate($customerData);
      $invoice->setCustomer($customer);
    }
  }
}
