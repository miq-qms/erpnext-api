<?php

namespace Miq\ErpnextApi\Entity;

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
