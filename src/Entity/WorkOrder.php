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

    /**
     * @return string|null
     */
    public function getNamingSeries(): ?string
    {
        return $this->namingSeries;
    }

    /**
     * @param string|null $namingSeries
     */
    public function setNamingSeries(?string $namingSeries): void
    {
        $this->namingSeries = $namingSeries;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getProductionItem(): ?string
    {
        return $this->productionItem;
    }

    /**
     * @param string|null $productionItem
     */
    public function setProductionItem(?string $productionItem): void
    {
        $this->productionItem = $productionItem;
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
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
    }

    /**
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * @param float $qty
     */
    public function setQty(float $qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @return float
     */
    public function getMaterialTransferredForManufacturing(): float
    {
        return $this->materialTransferredForManufacturing;
    }

    /**
     * @param float $materialTransferredForManufacturing
     */
    public function setMaterialTransferredForManufacturing(float $materialTransferredForManufacturing): void
    {
        $this->materialTransferredForManufacturing = $materialTransferredForManufacturing;
    }

    /**
     * @return float
     */
    public function getProducedQty(): float
    {
        return $this->producedQty;
    }

    /**
     * @param float $producedQty
     */
    public function setProducedQty(float $producedQty): void
    {
        $this->producedQty = $producedQty;
    }

    /**
     * @return float
     */
    public function getProcessLossQty(): float
    {
        return $this->processLossQty;
    }

    /**
     * @param float $processLossQty
     */
    public function setProcessLossQty(float $processLossQty): void
    {
        $this->processLossQty = $processLossQty;
    }

    /**
     * @return string|null
     */
    public function getSalesOrder(): ?string
    {
        return $this->salesOrder;
    }

    /**
     * @param string|null $salesOrder
     */
    public function setSalesOrder(?string $salesOrder): void
    {
        $this->salesOrder = $salesOrder;
    }

    /**
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->project;
    }

    /**
     * @param string|null $project
     */
    public function setProject(?string $project): void
    {
        $this->project = $project;
    }

    /**
     * @return int
     */
    public function getHasSerialNo(): int
    {
        return $this->hasSerialNo;
    }

    /**
     * @param int $hasSerialNo
     */
    public function setHasSerialNo(int $hasSerialNo): void
    {
        $this->hasSerialNo = $hasSerialNo;
    }

    /**
     * @return int
     */
    public function getHasBatchNo(): int
    {
        return $this->hasBatchNo;
    }

    /**
     * @param int $hasBatchNo
     */
    public function setHasBatchNo(int $hasBatchNo): void
    {
        $this->hasBatchNo = $hasBatchNo;
    }

    /**
     * @return string|null
     */
    public function getSerialNo(): ?string
    {
        return $this->serialNo;
    }

    /**
     * @param string|null $serialNo
     */
    public function setSerialNo(?string $serialNo): void
    {
        $this->serialNo = $serialNo;
    }

    /**
     * @return float
     */
    public function getBatchSize(): float
    {
        return $this->batchSize;
    }

    /**
     * @param float $batchSize
     */
    public function setBatchSize(float $batchSize): void
    {
        $this->batchSize = $batchSize;
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
    public function getUseMultiLevelBom(): int
    {
        return $this->useMultiLevelBom;
    }

    /**
     * @param int $useMultiLevelBom
     */
    public function setUseMultiLevelBom(int $useMultiLevelBom): void
    {
        $this->useMultiLevelBom = $useMultiLevelBom;
    }

    /**
     * @return int
     */
    public function getSkipTransfer(): int
    {
        return $this->skipTransfer;
    }

    /**
     * @param int $skipTransfer
     */
    public function setSkipTransfer(int $skipTransfer): void
    {
        $this->skipTransfer = $skipTransfer;
    }

    /**
     * @return int
     */
    public function getFromWipWarehouse(): int
    {
        return $this->fromWipWarehouse;
    }

    /**
     * @param int $fromWipWarehouse
     */
    public function setFromWipWarehouse(int $fromWipWarehouse): void
    {
        $this->fromWipWarehouse = $fromWipWarehouse;
    }

    /**
     * @return int
     */
    public function getUpdateConsumedMaterialCostInProject(): int
    {
        return $this->updateConsumedMaterialCostInProject;
    }

    /**
     * @param int $updateConsumedMaterialCostInProject
     */
    public function setUpdateConsumedMaterialCostInProject(int $updateConsumedMaterialCostInProject): void
    {
        $this->updateConsumedMaterialCostInProject = $updateConsumedMaterialCostInProject;
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
    public function getWipWarehouse(): ?string
    {
        return $this->wipWarehouse;
    }

    /**
     * @param string|null $wipWarehouse
     */
    public function setWipWarehouse(?string $wipWarehouse): void
    {
        $this->wipWarehouse = $wipWarehouse;
    }

    /**
     * @return string|null
     */
    public function getFgWarehouse(): ?string
    {
        return $this->fgWarehouse;
    }

    /**
     * @param string|null $fgWarehouse
     */
    public function setFgWarehouse(?string $fgWarehouse): void
    {
        $this->fgWarehouse = $fgWarehouse;
    }

    /**
     * @return string|null
     */
    public function getScrapWarehouse(): ?string
    {
        return $this->scrapWarehouse;
    }

    /**
     * @param string|null $scrapWarehouse
     */
    public function setScrapWarehouse(?string $scrapWarehouse): void
    {
        $this->scrapWarehouse = $scrapWarehouse;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPlannedStartDate(): ?DateTimeInterface
    {
        return $this->plannedStartDate;
    }

    /**
     * @param DateTimeInterface|null $plannedStartDate
     */
    public function setPlannedStartDate(?DateTimeInterface $plannedStartDate): void
    {
        $this->plannedStartDate = $plannedStartDate;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getPlannedEndDate(): ?DateTimeInterface
    {
        return $this->plannedEndDate;
    }

    /**
     * @param DateTimeInterface|null $plannedEndDate
     */
    public function setPlannedEndDate(?DateTimeInterface $plannedEndDate): void
    {
        $this->plannedEndDate = $plannedEndDate;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getExpectedDeliveryDate(): ?DateTimeInterface
    {
        return $this->expectedDeliveryDate;
    }

    /**
     * @param DateTimeInterface|null $expectedDeliveryDate
     */
    public function setExpectedDeliveryDate(?DateTimeInterface $expectedDeliveryDate): void
    {
        $this->expectedDeliveryDate = $expectedDeliveryDate;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getActualStartDate(): ?DateTimeInterface
    {
        return $this->actualStartDate;
    }

    /**
     * @param DateTimeInterface|null $actualStartDate
     */
    public function setActualStartDate(?DateTimeInterface $actualStartDate): void
    {
        $this->actualStartDate = $actualStartDate;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getActualEndDate(): ?DateTimeInterface
    {
        return $this->actualEndDate;
    }

    /**
     * @param DateTimeInterface|null $actualEndDate
     */
    public function setActualEndDate(?DateTimeInterface $actualEndDate): void
    {
        $this->actualEndDate = $actualEndDate;
    }

    /**
     * @return float
     */
    public function getLeadTime(): float
    {
        return $this->leadTime;
    }

    /**
     * @param float $leadTime
     */
    public function setLeadTime(float $leadTime): void
    {
        $this->leadTime = $leadTime;
    }

    /**
     * @return string|null
     */
    public function getTransferMaterialAgainst(): ?string
    {
        return $this->transferMaterialAgainst;
    }

    /**
     * @param string|null $transferMaterialAgainst
     */
    public function setTransferMaterialAgainst(?string $transferMaterialAgainst): void
    {
        $this->transferMaterialAgainst = $transferMaterialAgainst;
    }

    /**
     * @return float
     */
    public function getPlannedOperatingCost(): float
    {
        return $this->plannedOperatingCost;
    }

    /**
     * @param float $plannedOperatingCost
     */
    public function setPlannedOperatingCost(float $plannedOperatingCost): void
    {
        $this->plannedOperatingCost = $plannedOperatingCost;
    }

    /**
     * @return float
     */
    public function getActualOperatingCost(): float
    {
        return $this->actualOperatingCost;
    }

    /**
     * @param float $actualOperatingCost
     */
    public function setActualOperatingCost(float $actualOperatingCost): void
    {
        $this->actualOperatingCost = $actualOperatingCost;
    }

    /**
     * @return float
     */
    public function getAdditionalOperatingCost(): float
    {
        return $this->additionalOperatingCost;
    }

    /**
     * @param float $additionalOperatingCost
     */
    public function setAdditionalOperatingCost(float $additionalOperatingCost): void
    {
        $this->additionalOperatingCost = $additionalOperatingCost;
    }

    /**
     * @return float
     */
    public function getCorrectiveOperationCost(): float
    {
        return $this->correctiveOperationCost;
    }

    /**
     * @param float $correctiveOperationCost
     */
    public function setCorrectiveOperationCost(float $correctiveOperationCost): void
    {
        $this->correctiveOperationCost = $correctiveOperationCost;
    }

    /**
     * @return float
     */
    public function getTotalOperatingCost(): float
    {
        return $this->totalOperatingCost;
    }

    /**
     * @param float $totalOperatingCost
     */
    public function setTotalOperatingCost(float $totalOperatingCost): void
    {
        $this->totalOperatingCost = $totalOperatingCost;
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
     * @return string|null
     */
    public function getMaterialRequest(): ?string
    {
        return $this->materialRequest;
    }

    /**
     * @param string|null $materialRequest
     */
    public function setMaterialRequest(?string $materialRequest): void
    {
        $this->materialRequest = $materialRequest;
    }

    /**
     * @return string|null
     */
    public function getMaterialRequestItem(): ?string
    {
        return $this->materialRequestItem;
    }

    /**
     * @param string|null $materialRequestItem
     */
    public function setMaterialRequestItem(?string $materialRequestItem): void
    {
        $this->materialRequestItem = $materialRequestItem;
    }

    /**
     * @return string|null
     */
    public function getSalesOrderItem(): ?string
    {
        return $this->salesOrderItem;
    }

    /**
     * @param string|null $salesOrderItem
     */
    public function setSalesOrderItem(?string $salesOrderItem): void
    {
        $this->salesOrderItem = $salesOrderItem;
    }

    /**
     * @return string|null
     */
    public function getProductionPlan(): ?string
    {
        return $this->productionPlan;
    }

    /**
     * @param string|null $productionPlan
     */
    public function setProductionPlan(?string $productionPlan): void
    {
        $this->productionPlan = $productionPlan;
    }

    /**
     * @return string|null
     */
    public function getProductionPlanItem(): ?string
    {
        return $this->productionPlanItem;
    }

    /**
     * @param string|null $productionPlanItem
     */
    public function setProductionPlanItem(?string $productionPlanItem): void
    {
        $this->productionPlanItem = $productionPlanItem;
    }

    /**
     * @return string|null
     */
    public function getProductionPlanSubAssemblyItem(): ?string
    {
        return $this->productionPlanSubAssemblyItem;
    }

    /**
     * @param string|null $productionPlanSubAssemblyItem
     */
    public function setProductionPlanSubAssemblyItem(?string $productionPlanSubAssemblyItem): void
    {
        $this->productionPlanSubAssemblyItem = $productionPlanSubAssemblyItem;
    }

    /**
     * @return string|null
     */
    public function getProductBundleItem(): ?string
    {
        return $this->productBundleItem;
    }

    /**
     * @param string|null $productBundleItem
     */
    public function setProductBundleItem(?string $productBundleItem): void
    {
        $this->productBundleItem = $productBundleItem;
    }

    /**
     * @return string|null
     */
    public function getAmendedFrom(): ?string
    {
        return $this->amendedFrom;
    }

    /**
     * @param string|null $amendedFrom
     */
    public function setAmendedFrom(?string $amendedFrom): void
    {
        $this->amendedFrom = $amendedFrom;
    }

    /**
     * @return string|null
     */
    public function getSeen(): ?string
    {
        return $this->seen;
    }

    /**
     * @param string|null $seen
     */
    public function setSeen(?string $seen): void
    {
        $this->seen = $seen;
    }

}
