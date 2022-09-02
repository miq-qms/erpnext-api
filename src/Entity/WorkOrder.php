<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * TabworkOrder
 *
 * @ORM\Table(name=" `tabWork Order` ", indexes={@ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class WorkOrder
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="naming_series", type="string", length=140, nullable=true)
     */
    private ?string $namingSeries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=140, nullable=true, options={"default"="Draft"})
     */
    private ?string $status = 'Draft';

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_item", type="string", length=140, nullable=true)
     */
    private ?string $productionItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    private ?string $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bom_no", type="string", length=140, nullable=true)
     */
    private ?string $bomNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=140, nullable=true)
     */
    private ?string $company;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=1.000000000})
     */
    private float $qty = 1.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="material_transferred_for_manufacturing", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $materialTransferredForManufacturing = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="produced_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $producedQty = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="process_loss_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $processLossQty = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sales_order", type="string", length=140, nullable=true)
     */
    private ?string $salesOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project", type="string", length=140, nullable=true)
     */
    private ?string $project;

    /**
     * @var int
     *
     * @ORM\Column(name="has_serial_no", type="integer", nullable=false)
     */
    private int $hasSerialNo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="has_batch_no", type="integer", nullable=false)
     */
    private int $hasBatchNo = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_no", type="text", length=65535, nullable=true)
     */
    private ?string $serialNo;

    /**
     * @var float
     *
     * @ORM\Column(name="batch_size", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $batchSize = 0.000000000;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    private int $allowAlternativeItem = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="use_multi_level_bom", type="integer", nullable=false, options={"default"="1"})
     */
    private int $useMultiLevelBom = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="skip_transfer", type="integer", nullable=false)
     */
    private int $skipTransfer = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="from_wip_warehouse", type="integer", nullable=false)
     */
    private int $fromWipWarehouse = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="update_consumed_material_cost_in_project", type="integer", nullable=false, options={"default"="1"})
     */
    private int $updateConsumedMaterialCostInProject = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_warehouse", type="string", length=140, nullable=true)
     */
    private ?string $sourceWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wip_warehouse", type="string", length=140, nullable=true)
     */
    private ?string $wipWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fg_warehouse", type="string", length=140, nullable=true)
     */
    private ?string $fgWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scrap_warehouse", type="string", length=140, nullable=true)
     */
    private ?string $scrapWarehouse;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="planned_start_date", type="datetime", nullable=true)
     */
    private ?DateTimeInterface $plannedStartDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="planned_end_date", type="datetime", nullable=true)
     */
    private ?DateTimeInterface $plannedEndDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="expected_delivery_date", type="date", nullable=true)
     */
    private ?DateTimeInterface $expectedDeliveryDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="actual_start_date", type="datetime", nullable=true)
     */
    private ?DateTimeInterface $actualStartDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="actual_end_date", type="datetime", nullable=true)
     */
    private ?DateTimeInterface $actualEndDate;

    /**
     * @var float
     *
     * @ORM\Column(name="lead_time", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $leadTime = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transfer_material_against", type="string", length=140, nullable=true)
     */
    private ?string $transferMaterialAgainst;

    /**
     * @var float
     *
     * @ORM\Column(name="planned_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $plannedOperatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="actual_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $actualOperatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="additional_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $additionalOperatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="corrective_operation_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $correctiveOperationCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="total_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $totalOperatingCost = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private ?string $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stock_uom", type="string", length=140, nullable=true)
     */
    private ?string $stockUom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="material_request", type="string", length=140, nullable=true)
     */
    private ?string $materialRequest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="material_request_item", type="string", length=140, nullable=true)
     */
    private ?string $materialRequestItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sales_order_item", type="string", length=140, nullable=true)
     */
    private ?string $salesOrderItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_plan", type="string", length=140, nullable=true)
     */
    private ?string $productionPlan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_plan_item", type="string", length=140, nullable=true)
     */
    private ?string $productionPlanItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_plan_sub_assembly_item", type="string", length=140, nullable=true)
     */
    private ?string $productionPlanSubAssemblyItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_bundle_item", type="string", length=140, nullable=true)
     */
    private ?string $productBundleItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amended_from", type="string", length=140, nullable=true)
     */
    private ?string $amendedFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_seen", type="text", length=65535, nullable=true)
     */
    private ?string $seen;


}
