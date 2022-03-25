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
}
