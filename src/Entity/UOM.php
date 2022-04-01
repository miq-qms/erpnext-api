<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Tabuom
 *
 * @ORM\Table(name="tabUOM", uniqueConstraints={@ORM\UniqueConstraint(name="uom_name", columns={"uom_name"})}, indexes={@ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity
 */
class UOM
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uom_name", type="string", length=140, nullable=true)
     */
    private ?string $uomName;

    /**
     * @var int
     *
     * @ORM\Column(name="must_be_whole_number", type="integer", nullable=false)
     */
    private int $mustBeWholeNumber = 0;

    //region getter + setter
    public function getuomName(): ?String
    {
        return $this->uomName;
    }

    public function setuomName(String $uomName): self
    {
        $this->uomName = $uomName;

        return $this;
    }
    
    public function getmustBeWholeNumber(): int
    {
        return $this->mustBeWholeNumber;
    }

    public function setmustBeWholeNumber(int $mustBeWholeNumber): self
    {
        $this->uommustBeWholeNumberName = $mustBeWholeNumber;

        return $this;
    }

}
