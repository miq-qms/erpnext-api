<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Operation
 *
 * @ORM\Table(name="tabOperation", indexes={@ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"})})
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
}
