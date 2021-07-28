<?php

namespace Miq\ErpnextApi\Entity;

use Doctrine\ORM\Mapping as ORM;
use Miq\ErpnextApi\Traits\HeadTrait;

/**
 * Bom
 *
 * @ORM\Table(name="tabBOM", indexes={@ORM\Index(name="parent", columns={"parent"}), @ORM\Index(name="item", columns={"item"}), @ORM\Index(name="modified", columns={"modified"})})
 * @ORM\Entity
 */
class Bom
{
    use HeadTrait;

    //region properties
    /**
     * @var string|null
     *
     * @ORM\Column(name="item", type="string", length=140, nullable=true)
     */
    private ?string $item;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=140, nullable=true)
     */
    private ?string $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="item_name", type="string", length=140, nullable=true)
     */
    private ?string $itemName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uom", type="string", length=140, nullable=true)
     */
    private ?string $uom;

    /**
     * @var int
     *
     * @ORM\Column(name="is_active", type="integer", nullable=false, options={"default"="1"})
     */
    private int $isActive = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="is_default", type="integer", nullable=false, options={"default"="1"})
     */
    private int $isDefault = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="allow_alternative_item", type="integer", nullable=false)
     */
    private int $allowAlternativeItem = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="set_rate_of_sub_assembly_item_based_on_bom", type="integer", nullable=false, options={"default"="1"})
     */
    private int $setRateOfSubAssemblyItemBasedOnBom = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="project", type="string", length=140, nullable=true)
     */
    private ?string $project;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="decimal", precision=18, scale=6, nullable=false, options={"default"="1.000000"})
     */
    private string $quantity = '1.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=true)
     */
    private ?string $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=140, nullable=true)
     */
    private ?string $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="conversion_rate", type="decimal", precision=21, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private string $conversionRate = '0.000000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rm_cost_as_per", type="string", length=140, nullable=true, options={"default"="Valuation Rate"})
     */
    private ?string $rmCostAsPer = 'Valuation Rate';

    /**
     * @var string|null
     *
     * @ORM\Column(name="buying_price_list", type="string", length=140, nullable=true)
     */
    private ?string $buyingPriceList;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_list_currency", type="string", length=140, nullable=true)
     */
    private ?string $priceListCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="plc_conversion_rate", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $plcConversionRate = '0.000000';

    /**
     * @var int
     *
     * @ORM\Column(name="with_operations", type="integer", nullable=false)
     */
    private int $withOperations = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transfer_material_against", type="string", length=140, nullable=true, options={"default"="Work Order"})
     */
    private ?string $transferMaterialAgainst = 'Work Order';

    /**
     * @var string|null
     *
     * @ORM\Column(name="routing", type="string", length=140, nullable=true)
     */
    private ?string $routing;

    /**
     * @var int
     *
     * @ORM\Column(name="inspection_required", type="integer", nullable=false)
     */
    private int $inspectionRequired = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="quality_inspection_template", type="string", length=140, nullable=true)
     */
    private ?string $qualityInspectionTemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="operating_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $operatingCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="raw_material_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $rawMaterialCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="scrap_material_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $scrapMaterialCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_operating_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $baseOperatingCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_raw_material_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $baseRawMaterialCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_scrap_material_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $baseScrapMaterialCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="total_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $totalCost = '0.000000';

    /**
     * @var string
     *
     * @ORM\Column(name="base_total_cost", type="decimal", precision=18, scale=6, nullable=false, options={"default"="0.000000"})
     */
    private string $baseTotalCost = '0.000000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private ?string $description;

    /**
     * @var int
     *
     * @ORM\Column(name="has_variants", type="integer", nullable=false)
     */
    private int $hasVariants = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="show_in_website", type="integer", nullable=false)
     */
    private int $showInWebsite = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="route", type="text", length=65535, nullable=true)
     */
    private ?string $route;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website_image", type="text", length=65535, nullable=true)
     */
    private ?string $websiteImage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="thumbnail", type="string", length=140, nullable=true)
     */
    private ?string $thumbnail;

    /**
     * @var int
     *
     * @ORM\Column(name="show_items", type="integer", nullable=false)
     */
    private int $showItems = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="show_operations", type="integer", nullable=false)
     */
    private int $showOperations = 0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="web_long_description", type="text", length=0, nullable=true)
     */
    private ?string $webLongDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amended_from", type="string", length=140, nullable=true)
     */
    private ?string $amendedFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_user_tags", type="text", length=65535, nullable=true)
     */
    private ?string $userTags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_comments", type="text", length=65535, nullable=true)
     */
    private ?string $comments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_assign", type="text", length=65535, nullable=true)
     */
    private ?string $assign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="_liked_by", type="text", length=65535, nullable=true)
     */
    private ?string $likedBy;

    //endregion
    //region getter + setter

    /**
     * @return string|null
     */
    public function getItem(): ?string
    {
        return $this->item;
    }

    /**
     * @param string|null $item
     */
    public function setItem(?string $item): void
    {
        $this->item = $item;
    }

    /**
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    /**
     * @param string|null $company
     */
    public function setCompany(?string $company): void
    {
        $this->company = $company;
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
    public function getUom(): ?string
    {
        return $this->uom;
    }

    /**
     * @param string|null $uom
     */
    public function setUom(?string $uom): void
    {
        $this->uom = $uom;
    }

    /**
     * @return int
     */
    public function getIsActive(): int
    {
        return $this->isActive;
    }

    /**
     * @param int $isActive
     */
    public function setIsActive(int $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return int
     */
    public function getIsDefault(): int
    {
        return $this->isDefault;
    }

    /**
     * @param int $isDefault
     */
    public function setIsDefault(int $isDefault): void
    {
        $this->isDefault = $isDefault;
    }

    /**
     * @return int
     */
    public function getAllowAlternativeItem(): int
    {
        return $this->allowAlternativeItem;
    }

    /**
     * @param int $allowAlternativeItem
     */
    public function setAllowAlternativeItem(int $allowAlternativeItem): void
    {
        $this->allowAlternativeItem = $allowAlternativeItem;
    }

    /**
     * @return int
     */
    public function getSetRateOfSubAssemblyItemBasedOnBom(): int
    {
        return $this->setRateOfSubAssemblyItemBasedOnBom;
    }

    /**
     * @param int $setRateOfSubAssemblyItemBasedOnBom
     */
    public function setSetRateOfSubAssemblyItemBasedOnBom(int $setRateOfSubAssemblyItemBasedOnBom): void
    {
        $this->setRateOfSubAssemblyItemBasedOnBom = $setRateOfSubAssemblyItemBasedOnBom;
    }

    /**
     * @return string|null
     */
    public function getProject(): ?string
    {
        return $this->project;
    }

    /**
     * @param string|null $project
     */
    public function setProject(?string $project): void
    {
        $this->project = $project;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
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
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getConversionRate(): string
    {
        return $this->conversionRate;
    }

    /**
     * @param string $conversionRate
     */
    public function setConversionRate(string $conversionRate): void
    {
        $this->conversionRate = $conversionRate;
    }

    /**
     * @return string|null
     */
    public function getRmCostAsPer(): ?string
    {
        return $this->rmCostAsPer;
    }

    /**
     * @param string|null $rmCostAsPer
     */
    public function setRmCostAsPer(?string $rmCostAsPer): void
    {
        $this->rmCostAsPer = $rmCostAsPer;
    }

    /**
     * @return string|null
     */
    public function getBuyingPriceList(): ?string
    {
        return $this->buyingPriceList;
    }

    /**
     * @param string|null $buyingPriceList
     */
    public function setBuyingPriceList(?string $buyingPriceList): void
    {
        $this->buyingPriceList = $buyingPriceList;
    }

    /**
     * @return string|null
     */
    public function getPriceListCurrency(): ?string
    {
        return $this->priceListCurrency;
    }

    /**
     * @param string|null $priceListCurrency
     */
    public function setPriceListCurrency(?string $priceListCurrency): void
    {
        $this->priceListCurrency = $priceListCurrency;
    }

    /**
     * @return string
     */
    public function getPlcConversionRate(): string
    {
        return $this->plcConversionRate;
    }

    /**
     * @param string $plcConversionRate
     */
    public function setPlcConversionRate(string $plcConversionRate): void
    {
        $this->plcConversionRate = $plcConversionRate;
    }

    /**
     * @return int
     */
    public function getWithOperations(): int
    {
        return $this->withOperations;
    }

    /**
     * @param int $withOperations
     */
    public function setWithOperations(int $withOperations): void
    {
        $this->withOperations = $withOperations;
    }

    /**
     * @return string|null
     */
    public function getTransferMaterialAgainst(): ?string
    {
        return $this->transferMaterialAgainst;
    }

    /**
     * @param string|null $transferMaterialAgainst
     */
    public function setTransferMaterialAgainst(?string $transferMaterialAgainst): void
    {
        $this->transferMaterialAgainst = $transferMaterialAgainst;
    }

    /**
     * @return string|null
     */
    public function getRouting(): ?string
    {
        return $this->routing;
    }

    /**
     * @param string|null $routing
     */
    public function setRouting(?string $routing): void
    {
        $this->routing = $routing;
    }

    /**
     * @return int
     */
    public function getInspectionRequired(): int
    {
        return $this->inspectionRequired;
    }

    /**
     * @param int $inspectionRequired
     */
    public function setInspectionRequired(int $inspectionRequired): void
    {
        $this->inspectionRequired = $inspectionRequired;
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
     * @return string
     */
    public function getOperatingCost(): string
    {
        return $this->operatingCost;
    }

    /**
     * @param string $operatingCost
     */
    public function setOperatingCost(string $operatingCost): void
    {
        $this->operatingCost = $operatingCost;
    }

    /**
     * @return string
     */
    public function getRawMaterialCost(): string
    {
        return $this->rawMaterialCost;
    }

    /**
     * @param string $rawMaterialCost
     */
    public function setRawMaterialCost(string $rawMaterialCost): void
    {
        $this->rawMaterialCost = $rawMaterialCost;
    }

    /**
     * @return string
     */
    public function getScrapMaterialCost(): string
    {
        return $this->scrapMaterialCost;
    }

    /**
     * @param string $scrapMaterialCost
     */
    public function setScrapMaterialCost(string $scrapMaterialCost): void
    {
        $this->scrapMaterialCost = $scrapMaterialCost;
    }

    /**
     * @return string
     */
    public function getBaseOperatingCost(): string
    {
        return $this->baseOperatingCost;
    }

    /**
     * @param string $baseOperatingCost
     */
    public function setBaseOperatingCost(string $baseOperatingCost): void
    {
        $this->baseOperatingCost = $baseOperatingCost;
    }

    /**
     * @return string
     */
    public function getBaseRawMaterialCost(): string
    {
        return $this->baseRawMaterialCost;
    }

    /**
     * @param string $baseRawMaterialCost
     */
    public function setBaseRawMaterialCost(string $baseRawMaterialCost): void
    {
        $this->baseRawMaterialCost = $baseRawMaterialCost;
    }

    /**
     * @return string
     */
    public function getBaseScrapMaterialCost(): string
    {
        return $this->baseScrapMaterialCost;
    }

    /**
     * @param string $baseScrapMaterialCost
     */
    public function setBaseScrapMaterialCost(string $baseScrapMaterialCost): void
    {
        $this->baseScrapMaterialCost = $baseScrapMaterialCost;
    }

    /**
     * @return string
     */
    public function getTotalCost(): string
    {
        return $this->totalCost;
    }

    /**
     * @param string $totalCost
     */
    public function setTotalCost(string $totalCost): void
    {
        $this->totalCost = $totalCost;
    }

    /**
     * @return string
     */
    public function getBaseTotalCost(): string
    {
        return $this->baseTotalCost;
    }

    /**
     * @param string $baseTotalCost
     */
    public function setBaseTotalCost(string $baseTotalCost): void
    {
        $this->baseTotalCost = $baseTotalCost;
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
    public function getHasVariants(): int
    {
        return $this->hasVariants;
    }

    /**
     * @param int $hasVariants
     */
    public function setHasVariants(int $hasVariants): void
    {
        $this->hasVariants = $hasVariants;
    }

    /**
     * @return int
     */
    public function getShowInWebsite(): int
    {
        return $this->showInWebsite;
    }

    /**
     * @param int $showInWebsite
     */
    public function setShowInWebsite(int $showInWebsite): void
    {
        $this->showInWebsite = $showInWebsite;
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
     * @return int
     */
    public function getShowItems(): int
    {
        return $this->showItems;
    }

    /**
     * @param int $showItems
     */
    public function setShowItems(int $showItems): void
    {
        $this->showItems = $showItems;
    }

    /**
     * @return int
     */
    public function getShowOperations(): int
    {
        return $this->showOperations;
    }

    /**
     * @param int $showOperations
     */
    public function setShowOperations(int $showOperations): void
    {
        $this->showOperations = $showOperations;
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
    public function getAmendedFrom(): ?string
    {
        return $this->amendedFrom;
    }

    /**
     * @param string|null $amendedFrom
     */
    public function setAmendedFrom(?string $amendedFrom): void
    {
        $this->amendedFrom = $amendedFrom;
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
    //endregion
}
