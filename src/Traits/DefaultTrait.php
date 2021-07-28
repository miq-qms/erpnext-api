<?php

namespace Miq\ErpnextApi\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait DefaultTrait
 *
 * This trait contains the default columns mostly used in erpnext
 *
 *
 * @package Miq\ErpnextApi\Traits
 */

trait DefaultTrait {

    use HeadTrait;

    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="_user_tags", type="text", length=65535, nullable=true)
     */
    private ?string $userTags = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_comments", type="text", length=65535, nullable=true)
     */
    private ?string $comments = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_assign", type="text", length=65535, nullable=true)
     */
    private ?string $assign = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_liked_by", type="text", length=65535, nullable=true)
     */
    private ?string $likedBy = null;

    //endregion properties

    //region Getter + Setter
    /**
     * @return string|null
     */
    public function getUserTags(): ?string
    {
        return $this->userTags;
    }

    /**
     * @param string|null $userTags
     */
    public function setUserTags(?string $userTags): void
    {
        $this->userTags = $userTags;
    }

    /**
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }

    /**
     * @param string|null $comments
     */
    public function setComments(?string $comments): void
    {
        $this->comments = $comments;
    }

    /**
     * @return string|null
     */
    public function getAssign(): ?string
    {
        return $this->assign;
    }

    /**
     * @param string|null $assign
     */
    public function setAssign(?string $assign): void
    {
        $this->assign = $assign;
    }

    /**
     * @return string|null
     */
    public function getLikedBy(): ?string
    {
        return $this->likedBy;
    }

    /**
     * @param string|null $likedBy
     */
    public function setLikedBy(?string $likedBy): void
    {
        $this->likedBy = $likedBy;
    }
    //endregion

}