<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\DefaultTrait;

/**
 * Customer
 *
 * @ORM\Table(name="tabCustomer", uniqueConstraints={@ORM\UniqueConstraint(name="represents_company", columns={"represents_company"})}, indexes={@ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="customer_name", columns={"customer_name"}), @ORM\Index(name="modified", columns={"modified"}), @ORM\Index(name="customer_group", columns={"customer_group"})})
 * @ORM\Entity
 */
class Customer
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
     * @ORM\Column(name="salutation", type="string", length=140, nullable=true)
     */
    private ?string $salutation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_name", type="string", length=140, nullable=true)
     */
    private ?string $customerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=140, nullable=true)
     */
    private ?string $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_type", type="string", length=140, nullable=true, options={"default"="Company"})
     */
    private ?string $customerType = 'Company';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tax_withholding_category", type="string", length=140, nullable=true)
     */
    private ?string $taxWithholdingCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_bank_account", type="string", length=140, nullable=true)
     */
    private ?string $defaultBankAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lead_name", type="string", length=140, nullable=true)
     */
    private ?string $leadName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="account_manager", type="string", length=140, nullable=true)
     */
    private ?string $accountManager;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_group", type="string", length=140, nullable=true)
     */
    private ?string $customerGroup;

    /**
     * @var string|null
     *
     * @ORM\Column(name="territory", type="string", length=140, nullable=true)
     */
    private ?string $territory;

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
     * @var int
     *
     * @ORM\Column(name="so_required", type="integer", nullable=false)
     */
    private int $soRequired = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="dn_required", type="integer", nullable=false)
     */
    private int $dnRequired = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="disabled", type="integer", nullable=false)
     */
    private int $disabled = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="is_internal_customer", type="integer", nullable=false)
     */
    private int $isInternalCustomer = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="represents_company", type="string", length=140, nullable=true)
     */
    private ?string $representsCompany;

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
     * @ORM\Column(name="website", type="string", length=140, nullable=true)
     */
    private ?string $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_primary_contact", type="string", length=140, nullable=true)
     */
    private ?string $customerPrimaryContact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobile_no", type="string", length=140, nullable=true)
     */
    private ?string $mobileNo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_id", type="string", length=140, nullable=true)
     */
    private ?string $emailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_primary_address", type="string", length=140, nullable=true)
     */
    private ?string $customerPrimaryAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="primary_address", type="text", length=65535, nullable=true)
     */
    private ?string $primaryAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_terms", type="string", length=140, nullable=true)
     */
    private ?string $paymentTerms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_details", type="text", length=65535, nullable=true)
     */
    private ?string $customerDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="market_segment", type="string", length=140, nullable=true)
     */
    private ?string $marketSegment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="industry", type="string", length=140, nullable=true)
     */
    private ?string $industry;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="loyalty_program", type="string", length=140, nullable=true)
     */
    private ?string $loyaltyProgram;

    /**
     * @var string|null
     *
     * @ORM\Column(name="loyalty_program_tier", type="string", length=140, nullable=true)
     */
    private ?string $loyaltyProgramTier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_sales_partner", type="string", length=140, nullable=true)
     */
    private ?string $defaultSalesPartner;

    /**
     * @var string
     *
     * @ORM\Column(name="default_commission_rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $defaultCommissionRate = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_pos_id", type="string", length=140, nullable=true)
     */
    private ?string $customerPosId;
    //endregion

    //region getters + setters
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
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }

    /**
     * @param string|null $salutation
     */
    public function setSalutation(?string $salutation): void
    {
        $this->salutation = $salutation;
    }

    /**
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * @param string|null $customerName
     */
    public function setCustomerName(?string $customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @param string|null $gender
     */
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }

    /**
     * @param string|null $customerType
     */
    public function setCustomerType(?string $customerType): void
    {
        $this->customerType = $customerType;
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
    public function getLeadName(): ?string
    {
        return $this->leadName;
    }

    /**
     * @param string|null $leadName
     */
    public function setLeadName(?string $leadName): void
    {
        $this->leadName = $leadName;
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
    public function getAccountManager(): ?string
    {
        return $this->accountManager;
    }

    /**
     * @param string|null $accountManager
     */
    public function setAccountManager(?string $accountManager): void
    {
        $this->accountManager = $accountManager;
    }

    /**
     * @return string|null
     */
    public function getCustomerGroup(): ?string
    {
        return $this->customerGroup;
    }

    /**
     * @param string|null $customerGroup
     */
    public function setCustomerGroup(?string $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    /**
     * @return string|null
     */
    public function getTerritory(): ?string
    {
        return $this->territory;
    }

    /**
     * @param string|null $territory
     */
    public function setTerritory(?string $territory): void
    {
        $this->territory = $territory;
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
     * @return int
     */
    public function getSoRequired(): int
    {
        return $this->soRequired;
    }

    /**
     * @param int $soRequired
     */
    public function setSoRequired(int $soRequired): void
    {
        $this->soRequired = $soRequired;
    }

    /**
     * @return int
     */
    public function getDnRequired(): int
    {
        return $this->dnRequired;
    }

    /**
     * @param int $dnRequired
     */
    public function setDnRequired(int $dnRequired): void
    {
        $this->dnRequired = $dnRequired;
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
    public function getIsInternalCustomer(): int
    {
        return $this->isInternalCustomer;
    }

    /**
     * @param int $isInternalCustomer
     */
    public function setIsInternalCustomer(int $isInternalCustomer): void
    {
        $this->isInternalCustomer = $isInternalCustomer;
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
    public function getCustomerPrimaryContact(): ?string
    {
        return $this->customerPrimaryContact;
    }

    /**
     * @param string|null $customerPrimaryContact
     */
    public function setCustomerPrimaryContact(?string $customerPrimaryContact): void
    {
        $this->customerPrimaryContact = $customerPrimaryContact;
    }

    /**
     * @return string|null
     */
    public function getMobileNo(): ?string
    {
        return $this->mobileNo;
    }

    /**
     * @param string|null $mobileNo
     */
    public function setMobileNo(?string $mobileNo): void
    {
        $this->mobileNo = $mobileNo;
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
    public function getCustomerPrimaryAddress(): ?string
    {
        return $this->customerPrimaryAddress;
    }

    /**
     * @param string|null $customerPrimaryAddress
     */
    public function setCustomerPrimaryAddress(?string $customerPrimaryAddress): void
    {
        $this->customerPrimaryAddress = $customerPrimaryAddress;
    }

    /**
     * @return string|null
     */
    public function getPrimaryAddress(): ?string
    {
        return $this->primaryAddress;
    }

    /**
     * @param string|null $primaryAddress
     */
    public function setPrimaryAddress(?string $primaryAddress): void
    {
        $this->primaryAddress = $primaryAddress;
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
     * @return string|null
     */
    public function getCustomerDetails(): ?string
    {
        return $this->customerDetails;
    }

    /**
     * @param string|null $customerDetails
     */
    public function setCustomerDetails(?string $customerDetails): void
    {
        $this->customerDetails = $customerDetails;
    }

    /**
     * @return string|null
     */
    public function getMarketSegment(): ?string
    {
        return $this->marketSegment;
    }

    /**
     * @param string|null $marketSegment
     */
    public function setMarketSegment(?string $marketSegment): void
    {
        $this->marketSegment = $marketSegment;
    }

    /**
     * @return string|null
     */
    public function getIndustry(): ?string
    {
        return $this->industry;
    }

    /**
     * @param string|null $industry
     */
    public function setIndustry(?string $industry): void
    {
        $this->industry = $industry;
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

    /**
     * @return string|null
     */
    public function getLoyaltyProgram(): ?string
    {
        return $this->loyaltyProgram;
    }

    /**
     * @param string|null $loyaltyProgram
     */
    public function setLoyaltyProgram(?string $loyaltyProgram): void
    {
        $this->loyaltyProgram = $loyaltyProgram;
    }

    /**
     * @return string|null
     */
    public function getLoyaltyProgramTier(): ?string
    {
        return $this->loyaltyProgramTier;
    }

    /**
     * @param string|null $loyaltyProgramTier
     */
    public function setLoyaltyProgramTier(?string $loyaltyProgramTier): void
    {
        $this->loyaltyProgramTier = $loyaltyProgramTier;
    }

    /**
     * @return string|null
     */
    public function getDefaultSalesPartner(): ?string
    {
        return $this->defaultSalesPartner;
    }

    /**
     * @param string|null $defaultSalesPartner
     */
    public function setDefaultSalesPartner(?string $defaultSalesPartner): void
    {
        $this->defaultSalesPartner = $defaultSalesPartner;
    }

    /**
     * @return string
     */
    public function getDefaultCommissionRate(): string
    {
        return $this->defaultCommissionRate;
    }

    /**
     * @param string $defaultCommissionRate
     */
    public function setDefaultCommissionRate(string $defaultCommissionRate): void
    {
        $this->defaultCommissionRate = $defaultCommissionRate;
    }

    /**
     * @return string|null
     */
    public function getCustomerPosId(): ?string
    {
        return $this->customerPosId;
    }

    /**
     * @param string|null $customerPosId
     */
    public function setCustomerPosId(?string $customerPosId): void
    {
        $this->customerPosId = $customerPosId;
    }
    //endregion
}
