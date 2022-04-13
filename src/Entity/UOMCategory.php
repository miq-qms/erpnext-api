<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * TabuomCategory
 *
 * @ORM\Table(name=" `tabUOM Category` ", indexes={@ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class UOMCategory
{
    use DefaultTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_name", type="string", length=140, nullable=true)
     */
    private ?string $categoryName;

    /**
     * @return string|null
     */
    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    /**
     * @param string|null $categoryName
     */
    public function setCategoryName(?string $categoryName): void
    {
        $this->categoryName = $categoryName;
    }

}
