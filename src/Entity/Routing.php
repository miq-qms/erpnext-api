<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Tabrouting
 *
 * @ORM\Table(name="tabRouting", uniqueConstraints={@ORM\UniqueConstraint(name="routing_name", columns={"routing_name"})}, indexes={@ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Routing
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="routing_name", type="string", length=140, nullable=true)
     */
    private ?string $routingName;

    /**
     * @var int
     *
     * @ORM\Column(name="disabled", type="integer", nullable=false)
     */
    private int $disabled = 0;

    /**
     * @return string|null
     */
    public function getRoutingName(): ?string
    {
        return $this->routingName;
    }

    /**
     * @param string|null $routingName
     */
    public function setRoutingName(?string $routingName): void
    {
        $this->routingName = $routingName;
    }

    /**
     * @return int
     */
    public function getDisabled(): int
    {
        return $this->disabled;
    }

    /**
     * @param int $disabled
     */
    public function setDisabled(int $disabled): void
    {
        $this->disabled = $disabled;
    }

}
