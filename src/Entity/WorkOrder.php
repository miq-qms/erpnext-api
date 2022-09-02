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
    private $namingSeries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=140, nullable=true, options={"default"="Draft"})
     */
    private $status = 'Draft';

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_item", type="string", length=140, nullable=true)
     */
    private $productionItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    private $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bom_no", type="string", length=140, nullable=true)
     */
    private $bomNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=140, nullable=true)
     */
    private $company;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=1.000000000})
     */
    private $qty = 1.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="material_transferred_for_manufacturing", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $materialTransferredForManufacturing = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="produced_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $producedQty = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="process_loss_qty", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $processLossQty = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sales_order", type="string", length=140, nullable=true)
     */
    private $salesOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project", type="string", length=140, nullable=true)
     */
    private $project;

    /**
     * @var int
     *
     * @ORM\Column(name="has_serial_no", type="integer", nullable=false)
     */
    private $hasSerialNo = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="has_batch_no", type="integer", nullable=false)
     */
    private $hasBatchNo = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_no", type="text", length=65535, nullable=true)
     */
    private $serialNo;

    /**
     * @var float
     *
     * @ORM\Column(name="batch_size", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $batchSize = 0.000000000;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    private $allowAlternativeItem = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="use_multi_level_bom", type="integer", nullable=false, options={"default"="1"})
     */
    private $useMultiLevelBom = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="skip_transfer", type="integer", nullable=false)
     */
    private $skipTransfer = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="from_wip_warehouse", type="integer", nullable=false)
     */
    private $fromWipWarehouse = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="update_consumed_material_cost_in_project", type="integer", nullable=false, options={"default"="1"})
     */
    private $updateConsumedMaterialCostInProject = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_warehouse", type="string", length=140, nullable=true)
     */
    private $sourceWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wip_warehouse", type="string", length=140, nullable=true)
     */
    private $wipWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fg_warehouse", type="string", length=140, nullable=true)
     */
    private $fgWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="scrap_warehouse", type="string", length=140, nullable=true)
     */
    private $scrapWarehouse;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="planned_start_date", type="datetime", nullable=true)
     */
    private $plannedStartDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="planned_end_date", type="datetime", nullable=true)
     */
    private $plannedEndDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="expected_delivery_date", type="date", nullable=true)
     */
    private $expectedDeliveryDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="actual_start_date", type="datetime", nullable=true)
     */
    private $actualStartDate;

    /**
     *@var DateTimeInterface|null
     *
     * @ORM\Column(name="actual_end_date", type="datetime", nullable=true)
     */
    private $actualEndDate;

    /**
     * @var float
     *
     * @ORM\Column(name="lead_time", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $leadTime = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transfer_material_against", type="string", length=140, nullable=true)
     */
    private $transferMaterialAgainst;

    /**
     * @var float
     *
     * @ORM\Column(name="planned_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $plannedOperatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="actual_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $actualOperatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="additional_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $additionalOperatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="corrective_operation_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $correctiveOperationCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="total_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private $totalOperatingCost = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stock_uom", type="string", length=140, nullable=true)
     */
    private $stockUom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="material_request", type="string", length=140, nullable=true)
     */
    private $materialRequest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="material_request_item", type="string", length=140, nullable=true)
     */
    private $materialRequestItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sales_order_item", type="string", length=140, nullable=true)
     */
    private $salesOrderItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_plan", type="string", length=140, nullable=true)
     */
    private $productionPlan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_plan_item", type="string", length=140, nullable=true)
     */
    private $productionPlanItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="production_plan_sub_assembly_item", type="string", length=140, nullable=true)
     */
    private $productionPlanSubAssemblyItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_bundle_item", type="string", length=140, nullable=true)
     */
    private $productBundleItem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amended_from", type="string", length=140, nullable=true)
     */
    private $amendedFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_seen", type="text", length=65535, nullable=true)
     */
    private $seen;


}
