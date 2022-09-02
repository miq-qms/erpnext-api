<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * TabworkOrderItem
 *
 * @ORM\Table(name=" `tabWork Order Item` ", indexes={@ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="item_code_source_warehouse_index", columns={"item_code", "source_warehouse"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class WorkOrderItem
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="operation", type="string", length=140, nullable=true)
     */
    private ?string $operation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_code", type="string", length=140, nullable=true)
     */
    private ?string $itemCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_warehouse", type="string", length=140, nullable=true)
     */
    private ?string $sourceWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    private ?string $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private ?string $description;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    private int $allowAlternativeItem = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="include_item_in_manufacturing", type="integer", nullable=false)
     */
    private int $includeItemInManufacturing = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="required_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $requiredQty = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $rate = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $amount = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="transferred_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $transferredQty = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="consumed_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $consumedQty = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="available_qty_at_source_warehouse", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $availableQtyAtSourceWarehouse = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="available_qty_at_wip_warehouse", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $availableQtyAtWipWarehouse = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent", type="string", length=140, nullable=true)
     */
    private ?string $parent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parentfield", type="string", length=140, nullable=true)
     */
    private ?string $parentfield;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parenttype", type="string", length=140, nullable=true)
     */
    private ?string $parenttype;

    /**
     * @return string|null
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }

    /**
     * @param string|null $operation
     */
    public function setOperation(?string $operation): void
    {
        $this->operation = $operation;
    }

    /**
     * @return string|null
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * @param string|null $itemCode
     */
    public function setItemCode(?string $itemCode): void
    {
        $this->itemCode = $itemCode;
    }

    /**
     * @return string|null
     */
    public function getSourceWarehouse(): ?string
    {
        return $this->sourceWarehouse;
    }

    /**
     * @param string|null $sourceWarehouse
     */
    public function setSourceWarehouse(?string $sourceWarehouse): void
    {
        $this->sourceWarehouse = $sourceWarehouse;
    }

    /**
     * @return string|null
     */
    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    /**
     * @param string|null $itemName
     */
    public function setItemName(?string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getAllowAlternativeItem(): int
    {
        return $this->allowAlternativeItem;
    }

    /**
     * @param int $allowAlternativeItem
     */
    public function setAllowAlternativeItem(int $allowAlternativeItem): void
    {
        $this->allowAlternativeItem = $allowAlternativeItem;
    }

    /**
     * @return int
     */
    public function getIncludeItemInManufacturing(): int
    {
        return $this->includeItemInManufacturing;
    }

    /**
     * @param int $includeItemInManufacturing
     */
    public function setIncludeItemInManufacturing(int $includeItemInManufacturing): void
    {
        $this->includeItemInManufacturing = $includeItemInManufacturing;
    }

    /**
     * @return float
     */
    public function getRequiredQty(): float
    {
        return $this->requiredQty;
    }

    /**
     * @param float $requiredQty
     */
    public function setRequiredQty(float $requiredQty): void
    {
        $this->requiredQty = $requiredQty;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getTransferredQty(): float
    {
        return $this->transferredQty;
    }

    /**
     * @param float $transferredQty
     */
    public function setTransferredQty(float $transferredQty): void
    {
        $this->transferredQty = $transferredQty;
    }

    /**
     * @return float
     */
    public function getConsumedQty(): float
    {
        return $this->consumedQty;
    }

    /**
     * @param float $consumedQty
     */
    public function setConsumedQty(float $consumedQty): void
    {
        $this->consumedQty = $consumedQty;
    }

    /**
     * @return float
     */
    public function getAvailableQtyAtSourceWarehouse(): float
    {
        return $this->availableQtyAtSourceWarehouse;
    }

    /**
     * @param float $availableQtyAtSourceWarehouse
     */
    public function setAvailableQtyAtSourceWarehouse(float $availableQtyAtSourceWarehouse): void
    {
        $this->availableQtyAtSourceWarehouse = $availableQtyAtSourceWarehouse;
    }

    /**
     * @return float
     */
    public function getAvailableQtyAtWipWarehouse(): float
    {
        return $this->availableQtyAtWipWarehouse;
    }

    /**
     * @param float $availableQtyAtWipWarehouse
     */
    public function setAvailableQtyAtWipWarehouse(float $availableQtyAtWipWarehouse): void
    {
        $this->availableQtyAtWipWarehouse = $availableQtyAtWipWarehouse;
    }

    /**
     * @return string|null
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * @param string|null $parent
     */
    public function setParent(?string $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return string|null
     */
    public function getParentfield(): ?string
    {
        return $this->parentfield;
    }

    /**
     * @param string|null $parentfield
     */
    public function setParentfield(?string $parentfield): void
    {
        $this->parentfield = $parentfield;
    }

    /**
     * @return string|null
     */
    public function getParenttype(): ?string
    {
        return $this->parenttype;
    }

    /**
     * @param string|null $parenttype
     */
    public function setParenttype(?string $parenttype): void
    {
        $this->parenttype = $parenttype;
    }

}
