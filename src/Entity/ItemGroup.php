<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * TabitemGroup
 *
 * @ORM\Table(name=" `tabItem Group` ", uniqueConstraints={@ORM\UniqueConstraint(name="route", columns={"route"}), @ORM\UniqueConstraint(name="item_group_name", columns={"item_group_name"})}, indexes={@ORM\Index(name="rgt", columns={"rgt"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="lft", columns={"lft"})})
 * @ORM\Entity
 */
class ItemGroup
{

    use DefaultTrait;

    /**
     * @var int
     *
     * @ORM\Column(name="is_group", type="integer", nullable=false)
     */
    private int $isGroup = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private ?string $description;

    /**
     * @var int
     *
     * @ORM\Column(name="lft", type="integer", nullable=false)
     */
    private int $lft = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_group_name", type="string", length=140, nullable=true)
     */
    private ?string $itemGroupName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent_item_group", type="string", length=140, nullable=true)
     */
    private ?string $parentItemGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="route", type="string", length=140, nullable=true)
     */
    private ?string $route;

    /**
     * @var string|null
     *
     * @ORM\Column(name="old_parent", type="string", length=140, nullable=true)
     */
    private ?string $oldParent;

    /**
     * @var int
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false)
     */
    private int $rgt = 0;

    /**
     * @return int
     */
    public function getIsGroup(): int
    {
        return $this->isGroup;
    }

    /**
     * @param int $isGroup
     */
    public function setIsGroup(int $isGroup): void
    {
        $this->isGroup = $isGroup;
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
    public function getLft(): int
    {
        return $this->lft;
    }

    /**
     * @param int $lft
     */
    public function setLft(int $lft): void
    {
        $this->lft = $lft;
    }

    /**
     * @return int
     */
    public function getRgt(): int
    {
        return $this->rgt;
    }

    /**
     * @param int $rgt
     */
    public function setRgt(int $rgt): void
    {
        $this->rgt = $rgt;
    }

    /**
     * @return string|null
     */
    public function getOldParent(): ?string
    {
        return $this->oldParent;
    }

    /**
     * @param string|null $oldParent
     */
    public function setOldParent(?string $oldParent): void
    {
        $this->oldParent = $oldParent;
    }

    /**
     * @return string|null
     */
    public function getItemGroupName(): ?string
    {
        return $this->itemGroupName;
    }

    /**
     * @param string|null $itemGroupName
     */
    public function setItemGroupName(?string $itemGroupName): void
    {
        $this->itemGroupName = $itemGroupName;
    }

    /**
     * @return string|null
     */
    public function getParentItemGroup(): ?string
    {
        return $this->parentItemGroup;
    }

    /**
     * @param string|null $parentItemGroup
     */
    public function setParentItemGroup(?string $parentItemGroup): void
    {
        $this->parentItemGroup = $parentItemGroup;
    }

    /**
     * @return string|null
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * @param string|null $route
     */
    public function setRoute(?string $route): void
    {
        $this->route = $route;
    }
}
