<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabbomItem
 *
 * @ORM\Table(name="tabBOM Item", indexes={@ORM\Index(name="bom_no", columns={"bom_no"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="item_code", columns={"item_code"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class BomItem
{
    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="item_code", type="string", length=140, nullable=true)
     */
    private ?string $itemCode = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    private ?string $itemName = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="operation", type="string", length=140, nullable=true)
     */
    private ?string $operation = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bom_no", type="string", length=140, nullable=true)
     */
    private ?string $bomNo = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_warehouse", type="string", length=140, nullable=true)
     */
    private ?string $sourceWarehouse = null;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    private $allowAlternativeItem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private ?string $description = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image = null;

    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $qty = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="uom", type="string", length=140, nullable=true)
     */
    private ?string $uom = null;

    /**
     * @var string
     *
     * @ORM\Column(name="stock_qty", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $stockQty = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="stock_uom", type="string", length=140, nullable=true)
     */
    private ?string $stockUom;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_factor", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $conversionFactor = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $rate = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $baseRate = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $amount = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_amount", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $baseAmount = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="scrap", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $scrap = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="qty_consumed_per_unit", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $qtyConsumedPerUnit = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="has_variants", type="integer", nullable=false)
     */
    private int $hasVariants = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="include_item_in_manufacturing", type="integer", nullable=false)
     */
    private int $includeItemInManufacturing = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="original_item", type="string", length=140, nullable=true)
     */
    private ?string $originalItem;

    /**
     * @var int
     *
     * @ORM\Column(name="sourced_by_supplier", type="integer", nullable=false)
     */
    private int $sourcedBySupplier = 0;

    //endregion
    //region getter + setter
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
    public function getBomNo(): ?string
    {
        return $this->bomNo;
    }

    /**
     * @param string|null $bomNo
     */
    public function setBomNo(?string $bomNo): void
    {
        $this->bomNo = $bomNo;
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
     * @return int
     */
    public function getAllowAlternativeItem()
    {
        return $this->allowAlternativeItem;
    }

    /**
     * @param int $allowAlternativeItem
     */
    public function setAllowAlternativeItem($allowAlternativeItem): void
    {
        $this->allowAlternativeItem = $allowAlternativeItem;
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
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getQty(): string
    {
        return $this->qty;
    }

    /**
     * @param string $qty
     */
    public function setQty(string $qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @return string|null
     */
    public function getUom(): ?string
    {
        return $this->uom;
    }

    /**
     * @param string|null $uom
     */
    public function setUom(?string $uom): void
    {
        $this->uom = $uom;
    }

    /**
     * @return string
     */
    public function getStockQty(): string
    {
        return $this->stockQty;
    }

    /**
     * @param string $stockQty
     */
    public function setStockQty(string $stockQty): void
    {
        $this->stockQty = $stockQty;
    }

    /**
     * @return string|null
     */
    public function getStockUom(): ?string
    {
        return $this->stockUom;
    }

    /**
     * @param string|null $stockUom
     */
    public function setStockUom(?string $stockUom): void
    {
        $this->stockUom = $stockUom;
    }

    /**
     * @return string
     */
    public function getConversionFactor(): string
    {
        return $this->conversionFactor;
    }

    /**
     * @param string $conversionFactor
     */
    public function setConversionFactor(string $conversionFactor): void
    {
        $this->conversionFactor = $conversionFactor;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     */
    public function setRate(string $rate): void
    {
        $this->rate = $rate;
    }

    /**
     * @return string
     */
    public function getBaseRate(): string
    {
        return $this->baseRate;
    }

    /**
     * @param string $baseRate
     */
    public function setBaseRate(string $baseRate): void
    {
        $this->baseRate = $baseRate;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getBaseAmount(): string
    {
        return $this->baseAmount;
    }

    /**
     * @param string $baseAmount
     */
    public function setBaseAmount(string $baseAmount): void
    {
        $this->baseAmount = $baseAmount;
    }

    /**
     * @return string
     */
    public function getScrap(): string
    {
        return $this->scrap;
    }

    /**
     * @param string $scrap
     */
    public function setScrap(string $scrap): void
    {
        $this->scrap = $scrap;
    }

    /**
     * @return string
     */
    public function getQtyConsumedPerUnit(): string
    {
        return $this->qtyConsumedPerUnit;
    }

    /**
     * @param string $qtyConsumedPerUnit
     */
    public function setQtyConsumedPerUnit(string $qtyConsumedPerUnit): void
    {
        $this->qtyConsumedPerUnit = $qtyConsumedPerUnit;
    }

    /**
     * @return int
     */
    public function getHasVariants(): int
    {
        return $this->hasVariants;
    }

    /**
     * @param int $hasVariants
     */
    public function setHasVariants(int $hasVariants): void
    {
        $this->hasVariants = $hasVariants;
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
     * @return string|null
     */
    public function getOriginalItem(): ?string
    {
        return $this->originalItem;
    }

    /**
     * @param string|null $originalItem
     */
    public function setOriginalItem(?string $originalItem): void
    {
        $this->originalItem = $originalItem;
    }

    /**
     * @return int
     */
    public function getSourcedBySupplier(): int
    {
        return $this->sourcedBySupplier;
    }

    /**
     * @param int $sourcedBySupplier
     */
    public function setSourcedBySupplier(int $sourcedBySupplier): void
    {
        $this->sourcedBySupplier = $sourcedBySupplier;
    }
    //endregion

}
