<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * TabitemGroup
 *
 * @ORM\Table(name=" `tabSupplier Group` ", uniqueConstraints={@ORM\UniqueConstraint(name="route", columns={"route"}), @ORM\UniqueConstraint(name="supplier_group_name", columns={"supplier_group_name"})}, indexes={@ORM\Index(name="rgt", columns={"rgt"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="lft", columns={"lft"})})
 * @ORM\Entity
 */
class SupplierGroup
{

    use DefaultTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="is_group", type="integer", nullable=false)
     */
    private int $isGroup = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_terms", type="text", length=140, nullable=true)
     */
    private ?string $paymentTerms;

    /**
     * @var int
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private int $lft = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_group_name", type="string", length=140, nullable=true)
     */
    private ?string $supplierGroupName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_item_group", type="string", length=140, nullable=true)
     */
    private ?string $parentSupplierGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private int $rgt = 0;

    /**
     * @return int
     */
    public function getIsGroup(): int
    {
        return $this->isGroup;
    }

    /**
     * @param int $isGroup
     */
    public function setIsGroup(int $isGroup): void
    {
        $this->isGroup = $isGroup;
    }

    /**
     * @return string|null
     */
    public function getPaymentTerms(): ?string
    {
        return $this->paymentTerms;
    }

    /**
     * @param string|null $paymentTerms
     */
    public function setPaymentTerms(?string $paymentTerms): void
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return int
     */
    public function getLft(): int
    {
        return $this->lft;
    }

    /**
     * @param int $lft
     */
    public function setLft(int $lft): void
    {
        $this->lft = $lft;
    }

    /**
     * @return int
     */
    public function getRgt(): int
    {
        return $this->rgt;
    }

    /**
     * @param int $rgt
     */
    public function setRgt(int $rgt): void
    {
        $this->rgt = $rgt;
    }

    /**
     * @return string|null
     */
    public function getSupplierGroupName(): ?string
    {
        return $this->supplierGroupName;
    }

    /**
     * @param string|null $supplierGroupName
     */
    public function setSupplierGroupName(?string $supplierGroupName): void
    {
        $this->supplierGroupName = $supplierGroupName;
    }

    /**
     * @return string|null
     */
    public function getParentSupplierGroup(): ?string
    {
        return $this->parentSupplierGroup;
    }

    /**
     * @param string|null $parentSupplierGroup
     */
    public function setParentSupplierGroup(?string $parentSupplierGroup): void
    {
        $this->parentSupplierGroup = $parentSupplierGroup;
    }
}
