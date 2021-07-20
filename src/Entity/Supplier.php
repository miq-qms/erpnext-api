<?php

namespace Miq\ErpnextApi\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Supplier
 *
 * @ORM\Table(name="tabSupplier", indexes={@ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Supplier
{
    use DefaultTrait;

    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="naming_series", type="string", length=140, nullable=true)
     */
    private ?string $namingSeries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_name", type="string", length=140, nullable=true)
     */
    private ?string $supplierName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=140, nullable=true)
     */
    private ?string $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_bank_account", type="string", length=140, nullable=true)
     */
    private ?string $defaultBankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_id", type="string", length=140, nullable=true)
     */
    private ?string $taxId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_category", type="string", length=140, nullable=true)
     */
    private ?string $taxCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_withholding_category", type="string", length=140, nullable=true)
     */
    private ?string $taxWithholdingCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="is_transporter", type="integer", nullable=false)
     */
    private int $isTransporter = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="is_internal_supplier", type="integer", nullable=false)
     */
    private int $isInternalSupplier = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="represents_company", type="string", length=140, nullable=true)
     */
    private ?string $representsCompany;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_group", type="string", length=140, nullable=true)
     */
    private ?string $supplierGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_type", type="string", length=140, nullable=true, options={"default"="Company"})
     */
    private ?string $supplierType = 'Company';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pan", type="string", length=140, nullable=true)
     */
    private ?string $pan;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_purchase_invoice_creation_without_purchase_order", type="integer", nullable=false)
     */
    private int $allowPurchaseInvoiceCreationWithoutPurchaseOrder = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_purchase_invoice_creation_without_purchase_receipt", type="integer", nullable=false)
     */
    private int $allowPurchaseInvoiceCreationWithoutPurchaseReceipt = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="disabled", type="integer", nullable=false)
     */
    private int $disabled = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="warn_rfqs", type="integer", nullable=false)
     */
    private int $warnRfqs = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="warn_pos", type="integer", nullable=false)
     */
    private int $warnPos = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="prevent_rfqs", type="integer", nullable=false)
     */
    private int $preventRfqs = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="prevent_pos", type="integer", nullable=false)
     */
    private int $preventPos = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_currency", type="string", length=140, nullable=true)
     */
    private ?string $defaultCurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_price_list", type="string", length=140, nullable=true)
     */
    private ?string $defaultPriceList;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_terms", type="string", length=140, nullable=true)
     */
    private ?string $paymentTerms;

    /**
     * @var int
     *
     * @ORM\Column(name="on_hold", type="integer", nullable=false)
     */
    private int $onHold = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hold_type", type="string", length=140, nullable=true)
     */
    private ?string $holdType;

    /**
     * @var DateTimeInterface|null
     *
     * @ORM\Column(name="release_date", type="date", nullable=true)
     */
    private ?DateTimeInterface $releaseDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=140, nullable=true)
     */
    private ?string $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="supplier_details", type="text", length=65535, nullable=true)
     */
    private ?string $supplierDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="language", type="string", length=140, nullable=true)
     */
    private ?string $language;

    /**
     * @var int
     *
     * @ORM\Column(name="is_frozen", type="integer", nullable=false)
     */
    private int $isFrozen = 0;
    //endregion

    //region getter + setter
    /**
     * @return string|null
     */
    public function getNamingSeries(): ?string
    {
        return $this->namingSeries;
    }

    /**
     * @param string|null $namingSeries
     */
    public function setNamingSeries(?string $namingSeries): void
    {
        $this->namingSeries = $namingSeries;
    }

    /**
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    /**
     * @param string|null $supplierName
     */
    public function setSupplierName(?string $supplierName): void
    {
        $this->supplierName = $supplierName;
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
    public function getDefaultBankAccount(): ?string
    {
        return $this->defaultBankAccount;
    }

    /**
     * @param string|null $defaultBankAccount
     */
    public function setDefaultBankAccount(?string $defaultBankAccount): void
    {
        $this->defaultBankAccount = $defaultBankAccount;
    }

    /**
     * @return string|null
     */
    public function getTaxId(): ?string
    {
        return $this->taxId;
    }

    /**
     * @param string|null $taxId
     */
    public function setTaxId(?string $taxId): void
    {
        $this->taxId = $taxId;
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
     * @return string|null
     */
    public function getTaxWithholdingCategory(): ?string
    {
        return $this->taxWithholdingCategory;
    }

    /**
     * @param string|null $taxWithholdingCategory
     */
    public function setTaxWithholdingCategory(?string $taxWithholdingCategory): void
    {
        $this->taxWithholdingCategory = $taxWithholdingCategory;
    }

    /**
     * @return int
     */
    public function getIsTransporter(): int
    {
        return $this->isTransporter;
    }

    /**
     * @param int $isTransporter
     */
    public function setIsTransporter(int $isTransporter): void
    {
        $this->isTransporter = $isTransporter;
    }

    /**
     * @return int
     */
    public function getIsInternalSupplier(): int
    {
        return $this->isInternalSupplier;
    }

    /**
     * @param int $isInternalSupplier
     */
    public function setIsInternalSupplier(int $isInternalSupplier): void
    {
        $this->isInternalSupplier = $isInternalSupplier;
    }

    /**
     * @return string|null
     */
    public function getRepresentsCompany(): ?string
    {
        return $this->representsCompany;
    }

    /**
     * @param string|null $representsCompany
     */
    public function setRepresentsCompany(?string $representsCompany): void
    {
        $this->representsCompany = $representsCompany;
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
    public function getSupplierGroup(): ?string
    {
        return $this->supplierGroup;
    }

    /**
     * @param string|null $supplierGroup
     */
    public function setSupplierGroup(?string $supplierGroup): void
    {
        $this->supplierGroup = $supplierGroup;
    }

    /**
     * @return string|null
     */
    public function getSupplierType(): ?string
    {
        return $this->supplierType;
    }

    /**
     * @param string|null $supplierType
     */
    public function setSupplierType(?string $supplierType): void
    {
        $this->supplierType = $supplierType;
    }

    /**
     * @return string|null
     */
    public function getPan(): ?string
    {
        return $this->pan;
    }

    /**
     * @param string|null $pan
     */
    public function setPan(?string $pan): void
    {
        $this->pan = $pan;
    }

    /**
     * @return int
     */
    public function getAllowPurchaseInvoiceCreationWithoutPurchaseOrder(): int
    {
        return $this->allowPurchaseInvoiceCreationWithoutPurchaseOrder;
    }

    /**
     * @param int $allowPurchaseInvoiceCreationWithoutPurchaseOrder
     */
    public function setAllowPurchaseInvoiceCreationWithoutPurchaseOrder(int $allowPurchaseInvoiceCreationWithoutPurchaseOrder): void
    {
        $this->allowPurchaseInvoiceCreationWithoutPurchaseOrder = $allowPurchaseInvoiceCreationWithoutPurchaseOrder;
    }

    /**
     * @return int
     */
    public function getAllowPurchaseInvoiceCreationWithoutPurchaseReceipt(): int
    {
        return $this->allowPurchaseInvoiceCreationWithoutPurchaseReceipt;
    }

    /**
     * @param int $allowPurchaseInvoiceCreationWithoutPurchaseReceipt
     */
    public function setAllowPurchaseInvoiceCreationWithoutPurchaseReceipt(int $allowPurchaseInvoiceCreationWithoutPurchaseReceipt): void
    {
        $this->allowPurchaseInvoiceCreationWithoutPurchaseReceipt = $allowPurchaseInvoiceCreationWithoutPurchaseReceipt;
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
     * @return int
     */
    public function getWarnRfqs(): int
    {
        return $this->warnRfqs;
    }

    /**
     * @param int $warnRfqs
     */
    public function setWarnRfqs(int $warnRfqs): void
    {
        $this->warnRfqs = $warnRfqs;
    }

    /**
     * @return int
     */
    public function getWarnPos(): int
    {
        return $this->warnPos;
    }

    /**
     * @param int $warnPos
     */
    public function setWarnPos(int $warnPos): void
    {
        $this->warnPos = $warnPos;
    }

    /**
     * @return int
     */
    public function getPreventRfqs(): int
    {
        return $this->preventRfqs;
    }

    /**
     * @param int $preventRfqs
     */
    public function setPreventRfqs(int $preventRfqs): void
    {
        $this->preventRfqs = $preventRfqs;
    }

    /**
     * @return int
     */
    public function getPreventPos(): int
    {
        return $this->preventPos;
    }

    /**
     * @param int $preventPos
     */
    public function setPreventPos(int $preventPos): void
    {
        $this->preventPos = $preventPos;
    }

    /**
     * @return string|null
     */
    public function getDefaultCurrency(): ?string
    {
        return $this->defaultCurrency;
    }

    /**
     * @param string|null $defaultCurrency
     */
    public function setDefaultCurrency(?string $defaultCurrency): void
    {
        $this->defaultCurrency = $defaultCurrency;
    }

    /**
     * @return string|null
     */
    public function getDefaultPriceList(): ?string
    {
        return $this->defaultPriceList;
    }

    /**
     * @param string|null $defaultPriceList
     */
    public function setDefaultPriceList(?string $defaultPriceList): void
    {
        $this->defaultPriceList = $defaultPriceList;
    }

    /**
     * @return string|null
     */
    public function getPaymentTerms(): ?string
    {
        return $this->paymentTerms;
    }

    /**
     * @param string|null $paymentTerms
     */
    public function setPaymentTerms(?string $paymentTerms): void
    {
        $this->paymentTerms = $paymentTerms;
    }

    /**
     * @return int
     */
    public function getOnHold(): int
    {
        return $this->onHold;
    }

    /**
     * @param int $onHold
     */
    public function setOnHold(int $onHold): void
    {
        $this->onHold = $onHold;
    }

    /**
     * @return string|null
     */
    public function getHoldType(): ?string
    {
        return $this->holdType;
    }

    /**
     * @param string|null $holdType
     */
    public function setHoldType(?string $holdType): void
    {
        $this->holdType = $holdType;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getReleaseDate(): ?DateTimeInterface
    {
        return $this->releaseDate;
    }

    /**
     * @param DateTimeInterface|null $releaseDate
     */
    public function setReleaseDate(?DateTimeInterface $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    /**
     * @param string|null $website
     */
    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    /**
     * @return string|null
     */
    public function getSupplierDetails(): ?string
    {
        return $this->supplierDetails;
    }

    /**
     * @param string|null $supplierDetails
     */
    public function setSupplierDetails(?string $supplierDetails): void
    {
        $this->supplierDetails = $supplierDetails;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     */
    public function setLanguage(?string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return int
     */
    public function getIsFrozen(): int
    {
        return $this->isFrozen;
    }

    /**
     * @param int $isFrozen
     */
    public function setIsFrozen(int $isFrozen): void
    {
        $this->isFrozen = $isFrozen;
    }
    //endregion
}
