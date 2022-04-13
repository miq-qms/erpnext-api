<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\HeadTrait;

/**
 * TabbomOperation
 *
 * @ORM\Table(name=" `tabBOM Operation` ", indexes={@ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class BomOperation
{
    use HeadTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="sequence_id", type="integer", nullable=false)
     */
    private int $sequenceId = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="operation", type="string", length=140, nullable=true)
     */
    private ?string $operation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workstation", type="string", length=140, nullable=true)
     */
    private ?string $workstation;

    /**
     * @var float
     *
     * @ORM\Column(name="time_in_mins", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $timeInMins = 0.000000000;

    /**
     * @var int
     *
     * @ORM\Column(name="fixed_time", type="integer", nullable=false)
     */
    private int $fixedTime = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_rate", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $hourRate = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="base_hour_rate", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $baseHourRate = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $operatingCost = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="base_operating_cost", type="decimal", precision=21, scale=9, nullable=false, options={"default"=5.000000000})
     */
    private float $baseOperatingCost = 5.000000000;

    /**
     * @var int
     *
     * @ORM\Column(name="batch_size", type="integer", nullable=false)
     */
    private int $batchSize = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="set_cost_based_on_bom_qty", type="integer", nullable=false)
     */
    private int $setCostBasedOnBomQty = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="cost_per_unit", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private float $costPerUnit = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="base_cost_per_unit", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private float $baseCostPerUnit = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private ?string $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

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
     * @return int
     */
    public function getSequenceId(): int
    {
        return $this->sequenceId;
    }

    /**
     * @param int $sequenceId
     */
    public function setSequenceId(int $sequenceId): void
    {
        $this->sequenceId = $sequenceId;
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
    public function getWorkstation(): ?string
    {
        return $this->workstation;
    }

    /**
     * @param string|null $workstation
     */
    public function setWorkstation(?string $workstation): void
    {
        $this->workstation = $workstation;
    }

    /**
     * @return float
     */
    public function getTimeInMins(): float
    {
        return $this->timeInMins;
    }

    /**
     * @param float $timeInMins
     */
    public function setTimeInMins(float $timeInMins): void
    {
        $this->timeInMins = $timeInMins;
    }

    /**
     * @return int
     */
    public function getFixedTime(): int
    {
        return $this->fixedTime;
    }

    /**
     * @param int $fixedTime
     */
    public function setFixedTime(int $fixedTime): void
    {
        $this->fixedTime = $fixedTime;
    }

    /**
     * @return float
     */
    public function getHourRate(): float
    {
        return $this->hourRate;
    }

    /**
     * @param float $hourRate
     */
    public function setHourRate(float $hourRate): void
    {
        $this->hourRate = $hourRate;
    }

    /**
     * @return float
     */
    public function getBaseHourRate(): float
    {
        return $this->baseHourRate;
    }

    /**
     * @param float $baseHourRate
     */
    public function setBaseHourRate(float $baseHourRate): void
    {
        $this->baseHourRate = $baseHourRate;
    }

    /**
     * @return float
     */
    public function getOperatingCost(): float
    {
        return $this->operatingCost;
    }

    /**
     * @param float $operatingCost
     */
    public function setOperatingCost(float $operatingCost): void
    {
        $this->operatingCost = $operatingCost;
    }

    /**
     * @return float
     */
    public function getBaseOperatingCost(): float
    {
        return $this->baseOperatingCost;
    }

    /**
     * @param float $baseOperatingCost
     */
    public function setBaseOperatingCost(float $baseOperatingCost): void
    {
        $this->baseOperatingCost = $baseOperatingCost;
    }

    /**
     * @return int
     */
    public function getBatchSize(): int
    {
        return $this->batchSize;
    }

    /**
     * @param int $batchSize
     */
    public function setBatchSize(int $batchSize): void
    {
        $this->batchSize = $batchSize;
    }

    /**
     * @return int
     */
    public function getSetCostBasedOnBomQty(): int
    {
        return $this->setCostBasedOnBomQty;
    }

    /**
     * @param int $setCostBasedOnBomQty
     */
    public function setSetCostBasedOnBomQty(int $setCostBasedOnBomQty): void
    {
        $this->setCostBasedOnBomQty = $setCostBasedOnBomQty;
    }

    /**
     * @return float
     */
    public function getCostPerUnit(): float
    {
        return $this->costPerUnit;
    }

    /**
     * @param float $costPerUnit
     */
    public function setCostPerUnit(float $costPerUnit): void
    {
        $this->costPerUnit = $costPerUnit;
    }

    /**
     * @return float
     */
    public function getBaseCostPerUnit(): float
    {
        return $this->baseCostPerUnit;
    }

    /**
     * @param float $baseCostPerUnit
     */
    public function setBaseCostPerUnit(float $baseCostPerUnit): void
    {
        $this->baseCostPerUnit = $baseCostPerUnit;
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
