<?php


namespace Miq\ErpnextApi\Entity;


use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

class Version
{

    use DefaultTrait;

    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_doctype", type="string", length=140, nullable=true)
     */
    private ?string $refDoctype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="docname", type="string", length=140, nullable=true)
     */
    private ?string $docname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=0, nullable=true)
     */
    private ?string $data;
    //endregion

    //region getter + setter
    /**
     * @return string|null
     */
    public function getRefDoctype(): ?string
    {
        return $this->refDoctype;
    }

    /**
     * @param string|null $refDoctype
     */
    public function setRefDoctype(?string $refDoctype): void
    {
        $this->refDoctype = $refDoctype;
    }

    /**
     * @return string|null
     */
    public function getDocname(): ?string
    {
        return $this->docname;
    }

    /**
     * @param string|null $docname
     */
    public function setDocname(?string $docname): void
    {
        $this->docname = $docname;
    }

    /**
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * @param string|null $data
     */
    public function setData(?string $data): void
    {
        $this->data = $data;
    }
    //endregion
}