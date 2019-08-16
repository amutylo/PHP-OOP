<?php
namespace App\Entity;

use DateTime;

abstract class AbstractEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $dateCreated;

    /**
     * @var DateTime
     */
    protected $dateUpdated;

    /**
     * @return null
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AbstractEntity
     */
    public function setId(int $id): AbstractEntity
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateCreated
     * @return AbstractEntity
     */
    public function setDateCreated(DateTime $dateCreated): AbstractEntity
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @param DateTime $dateUpdated
     * @return AbstractEntity
     */
    public function setDateUpdated(DateTime $dateUpdated): AbstractEntity
    {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }


}
