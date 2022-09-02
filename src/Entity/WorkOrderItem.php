<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
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
    private $operation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_code", type="string", length=140, nullable=true)
     */
    private $itemCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_warehouse", type="string", length=140, nullable=true)
     */
    private $sourceWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    private $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    private $allowAlternativeItem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="include_item_in_manufacturing", type="integer", nullable=false)
     */
    private $includeItemInManufacturing = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="required_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $requiredQty = '0.000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="rate", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $rate = '0.000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $amount = '0.000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="transferred_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $transferredQty = '0.000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="consumed_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $consumedQty = '0.000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="available_qty_at_source_warehouse", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $availableQtyAtSourceWarehouse = '0.000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="available_qty_at_wip_warehouse", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $availableQtyAtWipWarehouse = '0.000000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent", type="string", length=140, nullable=true)
     */
    private $parent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parentfield", type="string", length=140, nullable=true)
     */
    private $parentfield;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parenttype", type="string", length=140, nullable=true)
     */
    private $parenttype;


}
