<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
/**
 * Tabitem
 *
 * @ORM\MappedSuperClass
 */
class Item
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return DateTime|null
     */
    public function getCreation(): ?DateTime
    {
        return $this->creation;
    }

    /**
     * @param DateTime|null $creation
     */
    public function setCreation(?DateTime $creation): void
    {
        $this->creation = $creation;
    }

    /**
     * @return DateTime|null
     */
    public function getModified(): ?DateTime
    {
        return $this->modified;
    }

    /**
     * @param DateTime|null $modified
     */
    public function setModified(?DateTime $modified): void
    {
        $this->modified = $modified;
    }

    /**
     * @return string|null
     */
    public function getModifiedBy(): ?string
    {
        return $this->modifiedBy;
    }

    /**
     * @param string|null $modifiedBy
     */
    public function setModifiedBy(?string $modifiedBy): void
    {
        $this->modifiedBy = $modifiedBy;
    }

    /**
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }

    /**
     * @param string|null $owner
     */
    public function setOwner(?string $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return int
     */
    public function getDocstatus()
    {
        return $this->docstatus;
    }

    /**
     * @param int $docstatus
     */
    public function setDocstatus($docstatus): void
    {
        $this->docstatus = $docstatus;
    }

    /**
     * @return string|null
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * @param string|null $parent
     */
    public function setParent(?string $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return string|null
     */
    public function getParentfield(): ?string
    {
        return $this->parentfield;
    }

    /**
     * @param string|null $parentfield
     */
    public function setParentfield(?string $parentfield): void
    {
        $this->parentfield = $parentfield;
    }

    /**
     * @return string|null
     */
    public function getParenttype(): ?string
    {
        return $this->parenttype;
    }

    /**
     * @param string|null $parenttype
     */
    public function setParenttype(?string $parenttype): void
    {
        $this->parenttype = $parenttype;
    }

    /**
     * @return int
     */
    public function getIdx()
    {
        return $this->idx;
    }

    /**
     * @param int $idx
     */
    public function setIdx($idx): void
    {
        $this->idx = $idx;
    }

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
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * @param string|null $itemCode
     */
    public function setItemCode(?string $itemCode): void
    {
        $this->itemCode = $itemCode;
    }

    /**
     * @return string|null
     */
    public function getVariantOf(): ?string
    {
        return $this->variantOf;
    }

    /**
     * @param string|null $variantOf
     */
    public function setVariantOf(?string $variantOf): void
    {
        $this->variantOf = $variantOf;
    }

    /**
     * @return string|null
     */
    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    /**
     * @param string|null $itemName
     */
    public function setItemName(?string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @return string|null
     */
    public function getItemGroup(): ?string
    {
        return $this->itemGroup;
    }

    /**
     * @param string|null $itemGroup
     */
    public function setItemGroup(?string $itemGroup): void
    {
        $this->itemGroup = $itemGroup;
    }

    /**
     * @return int
     */
    public function getIsItemFromHub()
    {
        return $this->isItemFromHub;
    }

    /**
     * @param int $isItemFromHub
     */
    public function setIsItemFromHub($isItemFromHub): void
    {
        $this->isItemFromHub = $isItemFromHub;
    }

    /**
     * @return string|null
     */
    public function getStockUom(): ?string
    {
        return $this->stockUom;
    }

    /**
     * @param string|null $stockUom
     */
    public function setStockUom(?string $stockUom): void
    {
        $this->stockUom = $stockUom;
    }

    /**
     * @return int
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param int $disabled
     */
    public function setDisabled($disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * @return int
     */
    public function getAllowAlternativeItem()
    {
        return $this->allowAlternativeItem;
    }

    /**
     * @param int $allowAlternativeItem
     */
    public function setAllowAlternativeItem($allowAlternativeItem): void
    {
        $this->allowAlternativeItem = $allowAlternativeItem;
    }

    /**
     * @return int
     */
    public function getIsStockItem(): int
    {
        return $this->isStockItem;
    }

    /**
     * @param int $isStockItem
     */
    public function setIsStockItem(int $isStockItem): void
    {
        $this->isStockItem = $isStockItem;
    }

    /**
     * @return int
     */
    public function getIncludeItemInManufacturing(): int
    {
        return $this->includeItemInManufacturing;
    }

    /**
     * @param int $includeItemInManufacturing
     */
    public function setIncludeItemInManufacturing(int $includeItemInManufacturing): void
    {
        $this->includeItemInManufacturing = $includeItemInManufacturing;
    }

    /**
     * @return string
     */
    public function getOpeningStock(): string
    {
        return $this->openingStock;
    }

    /**
     * @param string $openingStock
     */
    public function setOpeningStock(string $openingStock): void
    {
        $this->openingStock = $openingStock;
    }

    /**
     * @return string
     */
    public function getValuationRate(): string
    {
        return $this->valuationRate;
    }

    /**
     * @param string $valuationRate
     */
    public function setValuationRate(string $valuationRate): void
    {
        $this->valuationRate = $valuationRate;
    }

    /**
     * @return string
     */
    public function getStandardRate(): string
    {
        return $this->standardRate;
    }

    /**
     * @param string $standardRate
     */
    public function setStandardRate(string $standardRate): void
    {
        $this->standardRate = $standardRate;
    }

    /**
     * @return int
     */
    public function getIsFixedAsset()
    {
        return $this->isFixedAsset;
    }

    /**
     * @param int $isFixedAsset
     */
    public function setIsFixedAsset($isFixedAsset): void
    {
        $this->isFixedAsset = $isFixedAsset;
    }

    /**
     * @return int
     */
    public function getAutoCreateAssets()
    {
        return $this->autoCreateAssets;
    }

    /**
     * @param int $autoCreateAssets
     */
    public function setAutoCreateAssets($autoCreateAssets): void
    {
        $this->autoCreateAssets = $autoCreateAssets;
    }

    /**
     * @return string|null
     */
    public function getAssetCategory(): ?string
    {
        return $this->assetCategory;
    }

    /**
     * @param string|null $assetCategory
     */
    public function setAssetCategory(?string $assetCategory): void
    {
        $this->assetCategory = $assetCategory;
    }

    /**
     * @return string|null
     */
    public function getAssetNamingSeries(): ?string
    {
        return $this->assetNamingSeries;
    }

    /**
     * @param string|null $assetNamingSeries
     */
    public function setAssetNamingSeries(?string $assetNamingSeries): void
    {
        $this->assetNamingSeries = $assetNamingSeries;
    }

    /**
     * @return string
     */
    public function getOverDeliveryReceiptAllowance(): string
    {
        return $this->overDeliveryReceiptAllowance;
    }

    /**
     * @param string $overDeliveryReceiptAllowance
     */
    public function setOverDeliveryReceiptAllowance(string $overDeliveryReceiptAllowance): void
    {
        $this->overDeliveryReceiptAllowance = $overDeliveryReceiptAllowance;
    }

    /**
     * @return string
     */
    public function getOverBillingAllowance(): string
    {
        return $this->overBillingAllowance;
    }

    /**
     * @param string $overBillingAllowance
     */
    public function setOverBillingAllowance(string $overBillingAllowance): void
    {
        $this->overBillingAllowance = $overBillingAllowance;
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
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
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
    public function getShelfLifeInDays()
    {
        return $this->shelfLifeInDays;
    }

    /**
     * @param int $shelfLifeInDays
     */
    public function setShelfLifeInDays($shelfLifeInDays): void
    {
        $this->shelfLifeInDays = $shelfLifeInDays;
    }

    /**
     * @return DateTime|null
     */
    public function getEndOfLife()
    {
        return $this->endOfLife;
    }

    /**
     * @param DateTime|null $endOfLife
     */
    public function setEndOfLife($endOfLife): void
    {
        $this->endOfLife = $endOfLife;
    }

    /**
     * @return string|null
     */
    public function getDefaultMaterialRequestType(): ?string
    {
        return $this->defaultMaterialRequestType;
    }

    /**
     * @param string|null $defaultMaterialRequestType
     */
    public function setDefaultMaterialRequestType(?string $defaultMaterialRequestType): void
    {
        $this->defaultMaterialRequestType = $defaultMaterialRequestType;
    }

    /**
     * @return string|null
     */
    public function getValuationMethod(): ?string
    {
        return $this->valuationMethod;
    }

    /**
     * @param string|null $valuationMethod
     */
    public function setValuationMethod(?string $valuationMethod): void
    {
        $this->valuationMethod = $valuationMethod;
    }

    /**
     * @return string|null
     */
    public function getWarrantyPeriod(): ?string
    {
        return $this->warrantyPeriod;
    }

    /**
     * @param string|null $warrantyPeriod
     */
    public function setWarrantyPeriod(?string $warrantyPeriod): void
    {
        $this->warrantyPeriod = $warrantyPeriod;
    }

    /**
     * @return string
     */
    public function getWeightPerUnit(): string
    {
        return $this->weightPerUnit;
    }

    /**
     * @param string $weightPerUnit
     */
    public function setWeightPerUnit(string $weightPerUnit): void
    {
        $this->weightPerUnit = $weightPerUnit;
    }

    /**
     * @return string|null
     */
    public function getWeightUom(): ?string
    {
        return $this->weightUom;
    }

    /**
     * @param string|null $weightUom
     */
    public function setWeightUom(?string $weightUom): void
    {
        $this->weightUom = $weightUom;
    }

    /**
     * @return int
     */
    public function getHasBatchNo()
    {
        return $this->hasBatchNo;
    }

    /**
     * @param int $hasBatchNo
     */
    public function setHasBatchNo($hasBatchNo): void
    {
        $this->hasBatchNo = $hasBatchNo;
    }

    /**
     * @return int
     */
    public function getCreateNewBatch()
    {
        return $this->createNewBatch;
    }

    /**
     * @param int $createNewBatch
     */
    public function setCreateNewBatch($createNewBatch): void
    {
        $this->createNewBatch = $createNewBatch;
    }

    /**
     * @return string|null
     */
    public function getBatchNumberSeries(): ?string
    {
        return $this->batchNumberSeries;
    }

    /**
     * @param string|null $batchNumberSeries
     */
    public function setBatchNumberSeries(?string $batchNumberSeries): void
    {
        $this->batchNumberSeries = $batchNumberSeries;
    }

    /**
     * @return int
     */
    public function getHasExpiryDate()
    {
        return $this->hasExpiryDate;
    }

    /**
     * @param int $hasExpiryDate
     */
    public function setHasExpiryDate($hasExpiryDate): void
    {
        $this->hasExpiryDate = $hasExpiryDate;
    }

    /**
     * @return int
     */
    public function getRetainSample()
    {
        return $this->retainSample;
    }

    /**
     * @param int $retainSample
     */
    public function setRetainSample($retainSample): void
    {
        $this->retainSample = $retainSample;
    }

    /**
     * @return int
     */
    public function getSampleQuantity()
    {
        return $this->sampleQuantity;
    }

    /**
     * @param int $sampleQuantity
     */
    public function setSampleQuantity($sampleQuantity): void
    {
        $this->sampleQuantity = $sampleQuantity;
    }

    /**
     * @return int
     */
    public function getHasSerialNo()
    {
        return $this->hasSerialNo;
    }

    /**
     * @param int $hasSerialNo
     */
    public function setHasSerialNo($hasSerialNo): void
    {
        $this->hasSerialNo = $hasSerialNo;
    }

    /**
     * @return string|null
     */
    public function getSerialNoSeries(): ?string
    {
        return $this->serialNoSeries;
    }

    /**
     * @param string|null $serialNoSeries
     */
    public function setSerialNoSeries(?string $serialNoSeries): void
    {
        $this->serialNoSeries = $serialNoSeries;
    }

    /**
     * @return int
     */
    public function getHasVariants()
    {
        return $this->hasVariants;
    }

    /**
     * @param int $hasVariants
     */
    public function setHasVariants($hasVariants): void
    {
        $this->hasVariants = $hasVariants;
    }

    /**
     * @return string|null
     */
    public function getVariantBasedOn(): ?string
    {
        return $this->variantBasedOn;
    }

    /**
     * @param string|null $variantBasedOn
     */
    public function setVariantBasedOn(?string $variantBasedOn): void
    {
        $this->variantBasedOn = $variantBasedOn;
    }

    /**
     * @return int
     */
    public function getIsPurchaseItem(): int
    {
        return $this->isPurchaseItem;
    }

    /**
     * @param int $isPurchaseItem
     */
    public function setIsPurchaseItem(int $isPurchaseItem): void
    {
        $this->isPurchaseItem = $isPurchaseItem;
    }

    /**
     * @return string|null
     */
    public function getPurchaseUom(): ?string
    {
        return $this->purchaseUom;
    }

    /**
     * @param string|null $purchaseUom
     */
    public function setPurchaseUom(?string $purchaseUom): void
    {
        $this->purchaseUom = $purchaseUom;
    }

    /**
     * @return string
     */
    public function getMinOrderQty(): string
    {
        return $this->minOrderQty;
    }

    /**
     * @param string $minOrderQty
     */
    public function setMinOrderQty(string $minOrderQty): void
    {
        $this->minOrderQty = $minOrderQty;
    }

    /**
     * @return string
     */
    public function getSafetyStock(): string
    {
        return $this->safetyStock;
    }

    /**
     * @param string $safetyStock
     */
    public function setSafetyStock(string $safetyStock): void
    {
        $this->safetyStock = $safetyStock;
    }

    /**
     * @return int
     */
    public function getLeadTimeDays()
    {
        return $this->leadTimeDays;
    }

    /**
     * @param int $leadTimeDays
     */
    public function setLeadTimeDays($leadTimeDays): void
    {
        $this->leadTimeDays = $leadTimeDays;
    }

    /**
     * @return string
     */
    public function getLastPurchaseRate(): string
    {
        return $this->lastPurchaseRate;
    }

    /**
     * @param string $lastPurchaseRate
     */
    public function setLastPurchaseRate(string $lastPurchaseRate): void
    {
        $this->lastPurchaseRate = $lastPurchaseRate;
    }

    /**
     * @return int
     */
    public function getIsCustomerProvidedItem()
    {
        return $this->isCustomerProvidedItem;
    }

    /**
     * @param int $isCustomerProvidedItem
     */
    public function setIsCustomerProvidedItem($isCustomerProvidedItem): void
    {
        $this->isCustomerProvidedItem = $isCustomerProvidedItem;
    }

    /**
     * @return string|null
     */
    public function getCustomer(): ?string
    {
        return $this->customer;
    }

    /**
     * @param string|null $customer
     */
    public function setCustomer(?string $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @return int
     */
    public function getDeliveredBySupplier()
    {
        return $this->deliveredBySupplier;
    }

    /**
     * @param int $deliveredBySupplier
     */
    public function setDeliveredBySupplier($deliveredBySupplier): void
    {
        $this->deliveredBySupplier = $deliveredBySupplier;
    }

    /**
     * @return string|null
     */
    public function getCountryOfOrigin(): ?string
    {
        return $this->countryOfOrigin;
    }

    /**
     * @param string|null $countryOfOrigin
     */
    public function setCountryOfOrigin(?string $countryOfOrigin): void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * @return string|null
     */
    public function getCustomsTariffNumber(): ?string
    {
        return $this->customsTariffNumber;
    }

    /**
     * @param string|null $customsTariffNumber
     */
    public function setCustomsTariffNumber(?string $customsTariffNumber): void
    {
        $this->customsTariffNumber = $customsTariffNumber;
    }

    /**
     * @return string|null
     */
    public function getSalesUom(): ?string
    {
        return $this->salesUom;
    }

    /**
     * @param string|null $salesUom
     */
    public function setSalesUom(?string $salesUom): void
    {
        $this->salesUom = $salesUom;
    }

    /**
     * @return int
     */
    public function getIsSalesItem(): int
    {
        return $this->isSalesItem;
    }

    /**
     * @param int $isSalesItem
     */
    public function setIsSalesItem(int $isSalesItem): void
    {
        $this->isSalesItem = $isSalesItem;
    }

    /**
     * @return string
     */
    public function getMaxDiscount(): string
    {
        return $this->maxDiscount;
    }

    /**
     * @param string $maxDiscount
     */
    public function setMaxDiscount(string $maxDiscount): void
    {
        $this->maxDiscount = $maxDiscount;
    }

    /**
     * @return string|null
     */
    public function getDeferredRevenueAccount(): ?string
    {
        return $this->deferredRevenueAccount;
    }

    /**
     * @param string|null $deferredRevenueAccount
     */
    public function setDeferredRevenueAccount(?string $deferredRevenueAccount): void
    {
        $this->deferredRevenueAccount = $deferredRevenueAccount;
    }

    /**
     * @return int
     */
    public function getEnableDeferredRevenue()
    {
        return $this->enableDeferredRevenue;
    }

    /**
     * @param int $enableDeferredRevenue
     */
    public function setEnableDeferredRevenue($enableDeferredRevenue): void
    {
        $this->enableDeferredRevenue = $enableDeferredRevenue;
    }

    /**
     * @return int
     */
    public function getNoOfMonths()
    {
        return $this->noOfMonths;
    }

    /**
     * @param int $noOfMonths
     */
    public function setNoOfMonths($noOfMonths): void
    {
        $this->noOfMonths = $noOfMonths;
    }

    /**
     * @return string|null
     */
    public function getDeferredExpenseAccount(): ?string
    {
        return $this->deferredExpenseAccount;
    }

    /**
     * @param string|null $deferredExpenseAccount
     */
    public function setDeferredExpenseAccount(?string $deferredExpenseAccount): void
    {
        $this->deferredExpenseAccount = $deferredExpenseAccount;
    }

    /**
     * @return int
     */
    public function getEnableDeferredExpense()
    {
        return $this->enableDeferredExpense;
    }

    /**
     * @param int $enableDeferredExpense
     */
    public function setEnableDeferredExpense($enableDeferredExpense): void
    {
        $this->enableDeferredExpense = $enableDeferredExpense;
    }

    /**
     * @return int
     */
    public function getNoOfMonthsExp()
    {
        return $this->noOfMonthsExp;
    }

    /**
     * @param int $noOfMonthsExp
     */
    public function setNoOfMonthsExp($noOfMonthsExp): void
    {
        $this->noOfMonthsExp = $noOfMonthsExp;
    }

    /**
     * @return string|null
     */
    public function getQualityInspectionTemplate(): ?string
    {
        return $this->qualityInspectionTemplate;
    }

    /**
     * @param string|null $qualityInspectionTemplate
     */
    public function setQualityInspectionTemplate(?string $qualityInspectionTemplate): void
    {
        $this->qualityInspectionTemplate = $qualityInspectionTemplate;
    }

    /**
     * @return int
     */
    public function getInspectionRequiredBeforePurchase()
    {
        return $this->inspectionRequiredBeforePurchase;
    }

    /**
     * @param int $inspectionRequiredBeforePurchase
     */
    public function setInspectionRequiredBeforePurchase($inspectionRequiredBeforePurchase): void
    {
        $this->inspectionRequiredBeforePurchase = $inspectionRequiredBeforePurchase;
    }

    /**
     * @return int
     */
    public function getInspectionRequiredBeforeDelivery()
    {
        return $this->inspectionRequiredBeforeDelivery;
    }

    /**
     * @param int $inspectionRequiredBeforeDelivery
     */
    public function setInspectionRequiredBeforeDelivery($inspectionRequiredBeforeDelivery): void
    {
        $this->inspectionRequiredBeforeDelivery = $inspectionRequiredBeforeDelivery;
    }

    /**
     * @return string|null
     */
    public function getDefaultBom(): ?string
    {
        return $this->defaultBom;
    }

    /**
     * @param string|null $defaultBom
     */
    public function setDefaultBom(?string $defaultBom): void
    {
        $this->defaultBom = $defaultBom;
    }

    /**
     * @return int
     */
    public function getIsSubContractedItem()
    {
        return $this->isSubContractedItem;
    }

    /**
     * @param int $isSubContractedItem
     */
    public function setIsSubContractedItem($isSubContractedItem): void
    {
        $this->isSubContractedItem = $isSubContractedItem;
    }

    /**
     * @return string|null
     */
    public function getCustomerCode(): ?string
    {
        return $this->customerCode;
    }

    /**
     * @param string|null $customerCode
     */
    public function setCustomerCode(?string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * @return string|null
     */
    public function getDefaultItemManufacturer(): ?string
    {
        return $this->defaultItemManufacturer;
    }

    /**
     * @param string|null $defaultItemManufacturer
     */
    public function setDefaultItemManufacturer(?string $defaultItemManufacturer): void
    {
        $this->defaultItemManufacturer = $defaultItemManufacturer;
    }

    /**
     * @return string|null
     */
    public function getDefaultManufacturerPartNo(): ?string
    {
        return $this->defaultManufacturerPartNo;
    }

    /**
     * @param string|null $defaultManufacturerPartNo
     */
    public function setDefaultManufacturerPartNo(?string $defaultManufacturerPartNo): void
    {
        $this->defaultManufacturerPartNo = $defaultManufacturerPartNo;
    }

    /**
     * @return int
     */
    public function getShowInWebsite()
    {
        return $this->showInWebsite;
    }

    /**
     * @param int $showInWebsite
     */
    public function setShowInWebsite($showInWebsite): void
    {
        $this->showInWebsite = $showInWebsite;
    }

    /**
     * @return int
     */
    public function getShowVariantInWebsite()
    {
        return $this->showVariantInWebsite;
    }

    /**
     * @param int $showVariantInWebsite
     */
    public function setShowVariantInWebsite($showVariantInWebsite): void
    {
        $this->showVariantInWebsite = $showVariantInWebsite;
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

    /**
     * @return int
     */
    public function getWeightage()
    {
        return $this->weightage;
    }

    /**
     * @param int $weightage
     */
    public function setWeightage($weightage): void
    {
        $this->weightage = $weightage;
    }

    /**
     * @return string|null
     */
    public function getSlideshow(): ?string
    {
        return $this->slideshow;
    }

    /**
     * @param string|null $slideshow
     */
    public function setSlideshow(?string $slideshow): void
    {
        $this->slideshow = $slideshow;
    }

    /**
     * @return string|null
     */
    public function getWebsiteImage(): ?string
    {
        return $this->websiteImage;
    }

    /**
     * @param string|null $websiteImage
     */
    public function setWebsiteImage(?string $websiteImage): void
    {
        $this->websiteImage = $websiteImage;
    }

    /**
     * @return string|null
     */
    public function getWebsiteImageAlt(): ?string
    {
        return $this->websiteImageAlt;
    }

    /**
     * @param string|null $websiteImageAlt
     */
    public function setWebsiteImageAlt(?string $websiteImageAlt): void
    {
        $this->websiteImageAlt = $websiteImageAlt;
    }

    /**
     * @return string|null
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

    /**
     * @param string|null $thumbnail
     */
    public function setThumbnail(?string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return string|null
     */
    public function getWebsiteWarehouse(): ?string
    {
        return $this->websiteWarehouse;
    }

    /**
     * @param string|null $websiteWarehouse
     */
    public function setWebsiteWarehouse(?string $websiteWarehouse): void
    {
        $this->websiteWarehouse = $websiteWarehouse;
    }

    /**
     * @return string|null
     */
    public function getWebLongDescription(): ?string
    {
        return $this->webLongDescription;
    }

    /**
     * @param string|null $webLongDescription
     */
    public function setWebLongDescription(?string $webLongDescription): void
    {
        $this->webLongDescription = $webLongDescription;
    }

    /**
     * @return string|null
     */
    public function getWebsiteContent(): ?string
    {
        return $this->websiteContent;
    }

    /**
     * @param string|null $websiteContent
     */
    public function setWebsiteContent(?string $websiteContent): void
    {
        $this->websiteContent = $websiteContent;
    }

    /**
     * @return string
     */
    public function getTotalProjectedQty(): string
    {
        return $this->totalProjectedQty;
    }

    /**
     * @param string $totalProjectedQty
     */
    public function setTotalProjectedQty(string $totalProjectedQty): void
    {
        $this->totalProjectedQty = $totalProjectedQty;
    }

    /**
     * @return int
     */
    public function getPublishInHub()
    {
        return $this->publishInHub;
    }

    /**
     * @param int $publishInHub
     */
    public function setPublishInHub($publishInHub): void
    {
        $this->publishInHub = $publishInHub;
    }

    /**
     * @return string|null
     */
    public function getHubCategoryToPublish(): ?string
    {
        return $this->hubCategoryToPublish;
    }

    /**
     * @param string|null $hubCategoryToPublish
     */
    public function setHubCategoryToPublish(?string $hubCategoryToPublish): void
    {
        $this->hubCategoryToPublish = $hubCategoryToPublish;
    }

    /**
     * @return string|null
     */
    public function getHubWarehouse(): ?string
    {
        return $this->hubWarehouse;
    }

    /**
     * @param string|null $hubWarehouse
     */
    public function setHubWarehouse(?string $hubWarehouse): void
    {
        $this->hubWarehouse = $hubWarehouse;
    }

    /**
     * @return int
     */
    public function getSyncedWithHub()
    {
        return $this->syncedWithHub;
    }

    /**
     * @param int $syncedWithHub
     */
    public function setSyncedWithHub($syncedWithHub): void
    {
        $this->syncedWithHub = $syncedWithHub;
    }

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

    /**
     * @return string|null
     */
    public function getHubSyncId(): ?string
    {
        return $this->hubSyncId;
    }

    /**
     * @param string|null $hubSyncId
     */
    public function setHubSyncId(?string $hubSyncId): void
    {
        $this->hubSyncId = $hubSyncId;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=140, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public string $name;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="creation", type="datetime", nullable=true)
     */
    public ?DateTime $creation;

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="modified", type="datetime", nullable=true)
     */
    public ?DateTime $modified;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modified_by", type="string", length=140, nullable=true)
     */
    public ?string $modifiedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="owner", type="string", length=140, nullable=true)
     */
    public ?string $owner;

    /**
     * @var int
     *
     * @ORM\Column(name="docstatus", type="integer", nullable=false)
     */
    public $docstatus = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="parent", type="string", length=140, nullable=true)
     */
    public $parent;

    /**
     * @var string|null
     *
     *
     * @ORM\Column(name="parentfield", type="string", length=140, nullable=true)
     */
    public $parentfield;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parenttype", type="string", length=140, nullable=true)
     */
    public $parenttype;

    /**
     * @var int
     *
     * @ORM\Column(name="idx", type="integer", nullable=false)
     */
    public $idx = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="naming_series", type="string", length=140, nullable=true)
     */
    public $namingSeries;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_code", type="string", length=140, nullable=true)
     */
    public $itemCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="variant_of", type="string", length=140, nullable=true)
     */
    public $variantOf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    public $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_group", type="string", length=140, nullable=true)
     */
    public $itemGroup;

    /**
     * @var int
     *
     * @ORM\Column(name="is_item_from_hub", type="integer", nullable=false)
     */
    public $isItemFromHub = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="stock_uom", type="string", length=140, nullable=true)
     */
    public $stockUom;

    /**
     * @var int
     *
     * @ORM\Column(name="disabled", type="integer", nullable=false)
     */
    public $disabled = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    public $allowAlternativeItem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="is_stock_item", type="integer", nullable=false, options={"default"="1"})
     */
    public $isStockItem = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="include_item_in_manufacturing", type="integer", nullable=false, options={"default"="1"})
     */
    public $includeItemInManufacturing = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="opening_stock", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $openingStock = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="valuation_rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $valuationRate = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="standard_rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $standardRate = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="is_fixed_asset", type="integer", nullable=false)
     */
    public $isFixedAsset = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="auto_create_assets", type="integer", nullable=false)
     */
    public $autoCreateAssets = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="asset_category", type="string", length=140, nullable=true)
     */
    public $assetCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="asset_naming_series", type="string", length=140, nullable=true)
     */
    public $assetNamingSeries;

    /**
     * @var string
     *
     * @ORM\Column(name="over_delivery_receipt_allowance", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $overDeliveryReceiptAllowance = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="over_billing_allowance", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $overBillingAllowance = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    public $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand", type="string", length=140, nullable=true)
     */
    public $brand;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    public $description;

    /**
     * @var int
     *
     * @ORM\Column(name="shelf_life_in_days", type="integer", nullable=false)
     */
    public $shelfLifeInDays = '0';

    /**
     * @var DateTime|null
     *
     * @ORM\Column(name="end_of_life", type="date", nullable=true, options={"default"="2099-12-31"})
     */
    public $endOfLife = '2099-12-31';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_material_request_type", type="string", length=140, nullable=true, options={"default"="Purchase"})
     */
    public $defaultMaterialRequestType = 'Purchase';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valuation_method", type="string", length=140, nullable=true)
     */
    public $valuationMethod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="warranty_period", type="string", length=140, nullable=true)
     */
    public $warrantyPeriod;

    /**
     * @var string
     *
     * @ORM\Column(name="weight_per_unit", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $weightPerUnit = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="weight_uom", type="string", length=140, nullable=true)
     */
    public $weightUom;

    /**
     * @var int
     *
     * @ORM\Column(name="has_batch_no", type="integer", nullable=false)
     */
    public $hasBatchNo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="create_new_batch", type="integer", nullable=false)
     */
    public $createNewBatch = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_number_series", type="string", length=140, nullable=true)
     */
    public $batchNumberSeries;

    /**
     * @var int
     *
     * @ORM\Column(name="has_expiry_date", type="integer", nullable=false)
     */
    public $hasExpiryDate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retain_sample", type="integer", nullable=false)
     */
    public $retainSample = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sample_quantity", type="integer", nullable=false)
     */
    public $sampleQuantity = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="has_serial_no", type="integer", nullable=false)
     */
    public $hasSerialNo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="serial_no_series", type="string", length=140, nullable=true)
     */
    public $serialNoSeries;

    /**
     * @var int
     *
     * @ORM\Column(name="has_variants", type="integer", nullable=false)
     */
    public $hasVariants = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="variant_based_on", type="string", length=140, nullable=true, options={"default"="Item Attribute"})
     */
    public $variantBasedOn = 'Item Attribute';

    /**
     * @var int
     *
     * @ORM\Column(name="is_purchase_item", type="integer", nullable=false, options={"default"="1"})
     */
    public $isPurchaseItem = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="purchase_uom", type="string", length=140, nullable=true)
     */
    public $purchaseUom;

    /**
     * @var string
     *
     * @ORM\Column(name="min_order_qty", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $minOrderQty = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="safety_stock", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $safetyStock = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="lead_time_days", type="integer", nullable=false)
     */
    public $leadTimeDays = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_purchase_rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $lastPurchaseRate = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="is_customer_provided_item", type="integer", nullable=false)
     */
    public $isCustomerProvidedItem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer", type="string", length=140, nullable=true)
     */
    public $customer;

    /**
     * @var int
     *
     * @ORM\Column(name="delivered_by_supplier", type="integer", nullable=false)
     */
    public $deliveredBySupplier = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_of_origin", type="string", length=140, nullable=true)
     */
    public $countryOfOrigin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customs_tariff_number", type="string", length=140, nullable=true)
     */
    public $customsTariffNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sales_uom", type="string", length=140, nullable=true)
     */
    public $salesUom;

    /**
     * @var int
     *
     * @ORM\Column(name="is_sales_item", type="integer", nullable=false, options={"default"="1"})
     */
    public $isSalesItem = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="max_discount", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $maxDiscount = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="deferred_revenue_account", type="string", length=140, nullable=true)
     */
    public $deferredRevenueAccount;

    /**
     * @var int
     *
     * @ORM\Column(name="enable_deferred_revenue", type="integer", nullable=false)
     */
    public $enableDeferredRevenue = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="no_of_months", type="integer", nullable=false)
     */
    public $noOfMonths = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="deferred_expense_account", type="string", length=140, nullable=true)
     */
    public $deferredExpenseAccount;

    /**
     * @var int
     *
     * @ORM\Column(name="enable_deferred_expense", type="integer", nullable=false)
     */
    public $enableDeferredExpense = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="no_of_months_exp", type="integer", nullable=false)
     */
    public $noOfMonthsExp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="quality_inspection_template", type="string", length=140, nullable=true)
     */
    public $qualityInspectionTemplate;

    /**
     * @var int
     *
     * @ORM\Column(name="inspection_required_before_purchase", type="integer", nullable=false)
     */
    public $inspectionRequiredBeforePurchase = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="inspection_required_before_delivery", type="integer", nullable=false)
     */
    public $inspectionRequiredBeforeDelivery = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_bom", type="string", length=140, nullable=true)
     */
    public $defaultBom;

    /**
     * @var int
     *
     * @ORM\Column(name="is_sub_contracted_item", type="integer", nullable=false)
     */
    public $isSubContractedItem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_code", type="string", length=140, nullable=true)
     */
    public $customerCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_item_manufacturer", type="string", length=140, nullable=true)
     */
    public $defaultItemManufacturer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_manufacturer_part_no", type="string", length=140, nullable=true)
     */
    public $defaultManufacturerPartNo;

    /**
     * @var int
     *
     * @ORM\Column(name="show_in_website", type="integer", nullable=false)
     */
    public $showInWebsite = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="show_variant_in_website", type="integer", nullable=false)
     */
    public $showVariantInWebsite = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="route", type="text", length=65535, nullable=true)
     */
    public $route;

    /**
     * @var int
     *
     * @ORM\Column(name="weightage", type="integer", nullable=false)
     */
    public $weightage = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="slideshow", type="string", length=140, nullable=true)
     */
    public $slideshow;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_image", type="text", length=65535, nullable=true)
     */
    public $websiteImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_image_alt", type="string", length=140, nullable=true)
     */
    public $websiteImageAlt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thumbnail", type="string", length=140, nullable=true)
     */
    public $thumbnail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_warehouse", type="string", length=140, nullable=true)
     */
    public $websiteWarehouse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web_long_description", type="text", length=0, nullable=true)
     */
    public $webLongDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_content", type="text", length=0, nullable=true)
     */
    public $websiteContent;

    /**
     * @var string
     *
     * @ORM\Column(name="total_projected_qty", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    public $totalProjectedQty = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="publish_in_hub", type="integer", nullable=false)
     */
    public $publishInHub = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="hub_category_to_publish", type="string", length=140, nullable=true)
     */
    public $hubCategoryToPublish;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hub_warehouse", type="string", length=140, nullable=true)
     */
    public $hubWarehouse;

    /**
     * @var int
     *
     * @ORM\Column(name="synced_with_hub", type="integer", nullable=false)
     */
    public $syncedWithHub = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="_user_tags", type="text", length=65535, nullable=true)
     */
    public $userTags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_comments", type="text", length=65535, nullable=true)
     */
    public $comments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_assign", type="text", length=65535, nullable=true)
     */
    public $assign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_liked_by", type="text", length=65535, nullable=true)
     */
    public $likedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="hub_sync_id", type="string", length=140, nullable=true)
     */
    public $hubSyncId;
}
