<?php
namespace App\Manager;
use App\Entity\Type\InvoiceItem;
use App\Repository\Type\InvoiceItemRepository;
use App\Repository\Type\InvoiceRepository;
class InvoiceItemManager extends AbstractManager
{
    /**
     * @var InvoiceRepository
     */
    private $repository;
    
    /**
     * InvoiceManager constructor.
     * @param InvoiceRepository $repository
     */
    public function __construct(InvoiceItemRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     *
     * @return Invoice|null
     */
    public function findOne(int $id): ?InvoiceItem
    {
        $entity = $this->repository->findOne($id);
        return $entity;
    }

    /**
     * @inheritDoc
     */
    public function findAll(): array
    {
        return $this->repository->findAll();
    }

  /**
   * @param int $id
   *
   * @return array
   */
  public function findAllByInvoiceId(int $id): array
  {
    return $this->repository->findAllByInvoiceId();
  }
    /**
     * @param InvoiceItem $entity
     * @return InvoiceItem
     */
    public function save(InvoiceItem $entity): InvoiceItem
    {
        $savedEntity = $this->repository->save($entity);
        return $savedEntity;
    }
}