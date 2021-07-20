<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Translation
 * @ORM\Table(name="tabTranslation", indexes={@ORM\Index(name="language", columns={"language"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity()
 */
class Translation
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=140, nullable=false)
     */
    private string $name;

    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(name="creation", type="datetime", nullable=true)
     */
    private DateTimeInterface $creation;

    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    private DateTimeInterface $modified;

    /**
     * @var string
     *
     * @ORM\Column(name="modified_by", type="string", length=140, nullable=true)
     */
    private string $modifiedBy;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=140, nullable=true)
     */
    private string $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="docstatus", type="integer", nullable=false)
     */
    private int $docstatus = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent", type="string", length=140, nullable=true)
     */
    private ?string $parent = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parentfield", type="string", length=140, nullable=true)
     */
    private ?string $parentfield = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parenttype", type="string", length=140, nullable=true)
     */
    private ?string $parenttype = null;

    /**
     * @var int
     *
     * @ORM\Column(name="idx", type="integer", nullable=false)
     */
    private int $idx = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="contributed", type="integer", nullable=false)
     */
    private int $contributed = 0;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=140, nullable=true)
     */
    private string $language;

    /**
     * @var string
     *
     * @ORM\Column(name="source_text", type="text", length=0, nullable=true)
     */
    private string $sourceText;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=140, nullable=true)
     */
    private string $context;

    /**
     * @var string
     *
     * @ORM\Column(name="translated_text", type="text", length=0, nullable=true)
     */
    private string $translatedText;

    /**
     * @var string
     *
     * @ORM\Column(name="contribution_status", type="string", length=140, nullable=true)
     */
    private string $contributionStatus = "";

    /**
     * @var string|null
     *
     * @ORM\Column(name="contribution_docname", type="string", length=140, nullable=true)
     */
    private ?string $contributionDocname = null;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreation(): ?DateTimeInterface
    {
        return $this->creation;
    }

    public function setCreation(DateTimeInterface $creation): self
    {
        $this->creation = $creation;

        return $this;
    }

    public function getModified(): DateTimeInterface
    {
        return $this->modified;
    }

    public function setModified(DateTimeInterface $modified): self
    {
        $this->modified = $modified;

        return $this;
    }

    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    public function setModifiedBy(string $modifiedBy): self
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->owner;
    }

    public function setOwner(string $owner): self
    {
        $this->owner = $owner;

        return $this;
    }

    public function getDocstatus(): ?int
    {
        return $this->docstatus;
    }

    public function setDocstatus(int $docstatus): self
    {
        $this->docstatus = $docstatus;

        return $this;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(?string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getParentfield(): ?string
    {
        return $this->parentfield;
    }

    public function setParentfield(?string $parentfield): self
    {
        $this->parentfield = $parentfield;

        return $this;
    }

    public function getParenttype(): ?string
    {
        return $this->parenttype;
    }

    public function setParenttype(?string $parenttype): self
    {
        $this->parenttype = $parenttype;

        return $this;
    }

    public function getIdx(): ?int
    {
        return $this->idx;
    }

    public function setIdx(int $idx): self
    {
        $this->idx = $idx;

        return $this;
    }

    public function getContributed(): ?int
    {
        return $this->contributed;
    }

    public function setContributed(int $contributed): self
    {
        $this->contributed = $contributed;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getSourceText(): ?string
    {
        return $this->sourceText;
    }

    public function setSourceText(string $sourceText): self
    {
        $this->sourceText = $sourceText;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getTranslatedText(): ?string
    {
        return $this->translatedText;
    }

    public function setTranslatedText(string $translatedText): self
    {
        $this->translatedText = $translatedText;

        return $this;
    }

    public function getContributionStatus(): ?string
    {
        return $this->contributionStatus;
    }

    public function setContributionStatus(string $contributionStatus): self
    {
        $this->contributionStatus = $contributionStatus;

        return $this;
    }

    public function getContributionDocname(): ?string
    {
        return $this->contributionDocname;
    }

    public function setContributionDocname(?string $contributionDocname): self
    {
        $this->contributionDocname = $contributionDocname;

        return $this;
    }

    public function getUserTags(): ?string
    {
        return $this->userTags;
    }

    public function setUserTags(?string $userTags): self
    {
        $this->userTags = $userTags;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    public function getAssign(): ?string
    {
        return $this->assign;
    }

    public function setAssign(?string $assign): self
    {
        $this->assign = $assign;

        return $this;
    }

    public function getLikedBy(): ?string
    {
        return $this->likedBy;
    }

    public function setLikedBy(?string $likedBy): self
    {
        $this->likedBy = $likedBy;

        return $this;
    }
}
