<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Tabworkstation
 *
 * @ORM\Table(name="tabWorkstation", uniqueConstraints={@ORM\UniqueConstraint(name="workstation_name", columns={"workstation_name"})}, indexes={@ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Workstation
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="workstation_name", type="string", length=140, nullable=true)
     */
    private ?string $workstationName;

    /**
     * @var int
     *
     * @ORM\Column(name="production_capacity", type="integer", nullable=false, options={"default"=1})
     */
    private int $productionCapacity = 1;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_rate_electricity", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $hourRateElectricity = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_rate_consumable", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $hourRateConsumable = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_rate_rent", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $hourRateRent = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_rate_labour", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $hourRateLabour = 0.000000000;

    /**
     * @var float
     *
     * @ORM\Column(name="hour_rate", type="decimal", precision=21, scale=9, nullable=false, options={"default"=0.000000000})
     */
    private float $hourRate = 0.000000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="holiday_list", type="string", length=140, nullable=true)
     */
    private ?string $holidayList;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private ?string $description;

    /**
     * @return string|null
     */
    public function getWorkstationName(): ?string
    {
        return $this->workstationName;
    }

    /**
     * @param string|null $workstationName
     */
    public function setWorkstationName(?string $workstationName): void
    {
        $this->workstationName = $workstationName;
    }

    /**
     * @return int
     */
    public function getProductionCapacity(): int
    {
        return $this->productionCapacity;
    }

    /**
     * @param int $productionCapacity
     */
    public function setProductionCapacity(int $productionCapacity): void
    {
        $this->productionCapacity = $productionCapacity;
    }

    /**
     * @return float
     */
    public function getHourRateElectricity(): float
    {
        return $this->hourRateElectricity;
    }

    /**
     * @param float $hourRateElectricity
     */
    public function setHourRateElectricity(float $hourRateElectricity): void
    {
        $this->hourRateElectricity = $hourRateElectricity;
    }

    /**
     * @return float
     */
    public function getHourRateConsumable(): float
    {
        return $this->hourRateConsumable;
    }

    /**
     * @param float $hourRateConsumable
     */
    public function setHourRateConsumable(float $hourRateConsumable): void
    {
        $this->hourRateConsumable = $hourRateConsumable;
    }

    /**
     * @return float
     */
    public function getHourRateRent(): float
    {
        return $this->hourRateRent;
    }

    /**
     * @param float $hourRateRent
     */
    public function setHourRateRent(float $hourRateRent): void
    {
        $this->hourRateRent = $hourRateRent;
    }

    /**
     * @return float
     */
    public function getHourRateLabour(): float
    {
        return $this->hourRateLabour;
    }

    /**
     * @param float $hourRateLabour
     */
    public function setHourRateLabour(float $hourRateLabour): void
    {
        $this->hourRateLabour = $hourRateLabour;
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
     * @return string|null
     */
    public function getHolidayList(): ?string
    {
        return $this->holidayList;
    }

    /**
     * @param string|null $holidayList
     */
    public function setHolidayList(?string $holidayList): void
    {
        $this->holidayList = $holidayList;
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

}
