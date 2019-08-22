<?php
namespace App\Repository\Type;
use App\DB\Connection;
use App\DB\QueryBuilder;
use App\Entity\Type\InvoiceItem;
use App\Hydration\InvoiceItemHydrator;
use App\Repository\AbstractRepository;
class InvoiceItemRepository extends AbstractRepository
{

  /**
   * @var \App\DB\Connection
   */
  private $connection;

  public function __construct(Connection $connection)
  {
      $this->connection = $connection;
  }
    /**
     * @param int $id
     * @return InvoiceItem|null
     */
    public function findOne(int $id): ?InvoiceItem
    {
        $entity = null;
        $sql = QueryBuilder::findOneBy('invoice_item');
        $dbCon = $this->connection->open();
        $statement = $dbCon->prepare($sql);
        $statement->execute([
            'id' => $id
        ]);
        $row = $statement->fetch();
        if ($row) {
            $entity = InvoiceItemHydrator::hydrate($row);
        }
        return $entity;
    }
    /**
     * @inheritDoc
     */
    public function findAll(): array
    {
      $results = [];
      $sql = QueryBuilder::findAll('invoice_item');
      $dbCon = $this->connection->open();
      $statement = $dbCon->prepare($sql);
      $statement->execute();
      $rows = $statement->fetchAll();
      if (is_array($rows)) {
          foreach ($rows as $row) {
              $results[] = InvoiceItemHydrator::hydrate($row);
          }
      }
      return $results;
    }

    public function findAllByInvoiceId(int $id): array
    {
      $results = [];
      $sql = QueryBuilder::findAllBy('invoice_item');
      $dbCon = $this->connection->open();
      $statement = $dbCon->prepare($sql);
      $statement->execute([
        'invoice_id' => $id
      ]);
      $rows = $statement->fetchAll();
      if (is_array($rows)) {
        foreach ($rows as $row) {
          $results[] = InvoiceItemHydrator::hydrate($row);
        }
      }
    }

    /**
     * @param InvoiceItem $entity
     * @return InvoiceItem
     */
    public function save(InvoiceItem $entity): InvoiceItem
    {
      $data = [
        'reference' => $entity->getReference(),
        'total' => $entity->getTotal(),
        'units' => $entity->getUnits(),
        'units_price' => $entity->getUnitPrice(),
        'description' => $entity->getDescription(),
        'invoice_id' => $entity->getInvoice()->getId()
      ];

      $table = 'invoice_item';
      $where = [];
      if (null !== $entity->getId()) {
          $where['id'] = $entity->getId();
      }

      $sql = QueryBuilder::insertOrUpdate($data, $table, $where);
      if (null !== $entity->getId()) {
          $data['id'] = $entity->getId();
      }
      $dbCon = $this->connection->open();
      $statement = $dbCon->prepare($sql);
      $statement->execute(array_values($data));
      if (null === $entity->getId()) {
          $entity->setId($dbCon->lastInsertId());
      }
      return $entity;
    }
}
