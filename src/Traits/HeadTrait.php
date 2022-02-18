<?php

namespace Miq\ErpnextApi\Traits;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait DefaultTrait
 *
 * This trait contains the default columns mostly used in erpnext
 *
 *
 * @package Miq\ErpnextApi\Traits
 */

trait HeadTrait {

    //region head trait
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=140, nullable=false)
     * @ORM\Id
     *
     */
    private string $name = "";

    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(name="creation", type="datetime", nullable=true)
     */
    private DateTimeInterface $creation;

    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private DateTimeInterface $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_by", type="string", length=140, nullable=true)
     */
    private string $modifiedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=140, nullable=true)
     */
    private string $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="docstatus", type="integer", nullable=false)
     */
    private int $docstatus = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="idx", type="integer", nullable=false)
     */
    private int $idx = 0;
    //endregion

    //region getter + setter
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreation(): DateTimeInterface
    {
        return $this->creation;
    }

    /**
     * @param DateTimeInterface $creation
     */
    public function setCreation(DateTimeInterface $creation): void
    {
        $this->creation = $creation;
    }

    /**
     * @return DateTimeInterface
     */
    public function getModified(): DateTimeInterface
    {
        return $this->modified;
    }

    /**
     * @param DateTimeInterface $modified
     */
    public function setModified(DateTimeInterface $modified): void
    {
        $this->modified = $modified;
    }

    /**
     * @return string
     */
    public function getModifiedBy(): string
    {
        return $this->modifiedBy;
    }

    /**
     * @param string $modifiedBy
     */
    public function setModifiedBy(string $modifiedBy): void
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }

    /**
     * @param string $owner
     */
    public function setOwner(string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return int
     */
    public function getDocstatus(): int
    {
        return $this->docstatus;
    }

    /**
     * @param int $docstatus
     */
    public function setDocstatus(int $docstatus): void
    {
        $this->docstatus = $docstatus;
    }
    
    /**
     * @return int
     */
    public function getIdx(): int
    {
        return $this->idx;
    }

    /**
     * @param int $idx
     */
    public function setIdx(int $idx): void
    {
        $this->idx = $idx;
    }
    //endregion
}