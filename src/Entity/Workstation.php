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

}
