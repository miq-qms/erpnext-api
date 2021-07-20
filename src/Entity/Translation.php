<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Translation
 * @ORM\Table(name="tabTranslation", indexes={@ORM\Index(name="language", columns={"language"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="parent", columns={"parent"})})
 * @ORM\Entity()
 */
class Translation
{
    use DefaultTrait;

    //region properties
    /**
     * @var int
     *
     * @ORM\Column(name="contributed", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
    //endregion properties

    //region getter + setter
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
    //endregion

}
