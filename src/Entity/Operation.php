<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Operation
 *
 * @ORM\Table(name="tabOperation", indexes={@ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Operation
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workstation", type="string", length=140, nullable=true)
     */
    private ?string $workstation;

    /**
     * @var int
     *
     * @ORM\Column(name="is_corrective_operation", type="integer", nullable=false)
     */
    private int $isCorrectiveOperation = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="create_job_card_based_on_batch_size", type="integer", nullable=false)
     */
    private int $createJobCardBasedOnBatchSize = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quality_inspection_template", type="string", length=140, nullable=true)
     */
    private ?string $qualityInspectionTemplate;

    /**
     * @var int
     *
     * @ORM\Column(name="batch_size", type="integer", nullable=false, options={"default"=1})
     */
    private int $batchSize = 1;

    /**
     * @var float
     *
     * @ORM\Column(name="total_operation_time", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $totalOperationTime = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private ?string $description;

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
    public function getIsCorrectiveOperation(): int
    {
        return $this->isCorrectiveOperation;
    }

    /**
     * @param int $isCorrectiveOperation
     */
    public function setIsCorrectiveOperation(int $isCorrectiveOperation): void
    {
        $this->isCorrectiveOperation = $isCorrectiveOperation;
    }

    /**
     * @return int
     */
    public function getCreateJobCardBasedOnBatchSize(): int
    {
        return $this->createJobCardBasedOnBatchSize;
    }

    /**
     * @param int $createJobCardBasedOnBatchSize
     */
    public function setCreateJobCardBasedOnBatchSize(int $createJobCardBasedOnBatchSize): void
    {
        $this->createJobCardBasedOnBatchSize = $createJobCardBasedOnBatchSize;
    }

    /**
     * @return string|null
     */
    public function getQualityInspectionTemplate(): ?string
    {
        return $this->qualityInspectionTemplate;
    }

    /**
     * @param string|null $qualityInspectionTemplate
     */
    public function setQualityInspectionTemplate(?string $qualityInspectionTemplate): void
    {
        $this->qualityInspectionTemplate = $qualityInspectionTemplate;
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
     * @return float
     */
    public function getTotalOperationTime(): float
    {
        return $this->totalOperationTime;
    }

    /**
     * @param float $totalOperationTime
     */
    public function setTotalOperationTime(float $totalOperationTime): void
    {
        $this->totalOperationTime = $totalOperationTime;
    }


}
