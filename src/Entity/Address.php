<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Tabaddress
 *
 * @ORM\Table(name="tabAddress", indexes={@ORM\Index(name="country", columns={"country"}), @ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="city", columns={"city"}), @ORM\Index(name="pincode", columns={"pincode"}), @ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Address
{
    use DefaultTrait;

    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="address_title", type="string", length=140, nullable=true)
     */
    private ?string $addressTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_type", type="string", length=140, nullable=true)
     */
    private ?string $addressType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_line1", type="string", length=140, nullable=true)
     */
    private ?string $addressLine1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_line2", type="string", length=140, nullable=true)
     */
    private ?string $addressLine2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=140, nullable=true)
     */
    private ?string $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="county", type="string", length=140, nullable=true)
     */
    private ?string $county;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=140, nullable=true)
     */
    private ?string $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=140, nullable=true)
     */
    private ?string $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pincode", type="string", length=140, nullable=true)
     */
    private ?string $pincode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_id", type="string", length=140, nullable=true)
     */
    private ?string $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=140, nullable=true)
     */
    private ?string $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=140, nullable=true)
     */
    private ?string $fax;

    /**
     * @var int
     *
     * @ORM\Column(name="is_primary_address", type="integer", nullable=false)
     */
    private int $isPrimaryAddress= 0;

    /**
     * @var int
     *
     * @ORM\Column(name="is_shipping_address", type="integer", nullable=false)
     */
    private int $isShippingAddress= 0;

    /**
     * @var int
     *
     * @ORM\Column(name="disabled", type="integer", nullable=false)
     */
    private int $disabled= 0;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_category", type="string", length=140, nullable=true)
     */
    private ?string $taxCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="is_your_company_address", type="integer", nullable=false)
     */
    private int $isYourCompanyAddress= 0;
    //endregion

    //region getter + setter
    /**
     * @return string|null
     */
    public function getAddressTitle(): ?string
    {
        return $this->addressTitle;
    }

    /**
     * @param string|null $addressTitle
     */
    public function setAddressTitle(?string $addressTitle): void
    {
        $this->addressTitle = $addressTitle;
    }

    /**
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }

    /**
     * @param string|null $addressType
     */
    public function setAddressType(?string $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @param string|null $addressLine1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string|null $addressLine2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getCounty(): ?string
    {
        return $this->county;
    }

    /**
     * @param string|null $county
     */
    public function setCounty(?string $county): void
    {
        $this->county = $county;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * @return string|null
     */
    public function getPincode(): ?string
    {
        return $this->pincode;
    }

    /**
     * @param string|null $pincode
     */
    public function setPincode(?string $pincode): void
    {
        $this->pincode = $pincode;
    }

    /**
     * @return string|null
     */
    public function getEmailId(): ?string
    {
        return $this->emailId;
    }

    /**
     * @param string|null $emailId
     */
    public function setEmailId(?string $emailId): void
    {
        $this->emailId = $emailId;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param string|null $fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return int
     */
    public function getIsPrimaryAddress(): int
    {
        return $this->isPrimaryAddress;
    }

    /**
     * @param int $isPrimaryAddress
     */
    public function setIsPrimaryAddress(int $isPrimaryAddress): void
    {
        $this->isPrimaryAddress = $isPrimaryAddress;
    }

    /**
     * @return int
     */
    public function getIsShippingAddress(): int
    {
        return $this->isShippingAddress;
    }

    /**
     * @param int $isShippingAddress
     */
    public function setIsShippingAddress(int $isShippingAddress): void
    {
        $this->isShippingAddress = $isShippingAddress;
    }

    /**
     * @return int
     */
    public function getDisabled(): int
    {
        return $this->disabled;
    }

    /**
     * @param int $disabled
     */
    public function setDisabled(int $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * @return string|null
     */
    public function getTaxCategory(): ?string
    {
        return $this->taxCategory;
    }

    /**
     * @param string|null $taxCategory
     */
    public function setTaxCategory(?string $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }

    /**
     * @return int
     */
    public function getIsYourCompanyAddress(): int
    {
        return $this->isYourCompanyAddress;
    }

    /**
     * @param int $isYourCompanyAddress
     */
    public function setIsYourCompanyAddress(int $isYourCompanyAddress): void
    {
        $this->isYourCompanyAddress = $isYourCompanyAddress;
    }
    //enregion


}
