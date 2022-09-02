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


}
