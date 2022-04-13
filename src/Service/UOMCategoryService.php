<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\UOMCategory;
use Miq\ErpnextApi\Exception\ApiException;

class UOMCategoryService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/uomcategory'; }
    protected function getEntity(): string {  return UOMCategory::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param UOMCategory $item
     * @return UOMCategory|null
     * @throws ApiException
     */
    public function add(UOMCategory $item): ?UOMCategory
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), UOMCategory::class, 'json');
    }

    /**
     * @param array $items
     * @return UOMCategory
     * @throws ApiException
     */
    public function addMany(array $items): UOMCategory
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), UOMCategory::class, 'json');
    }
}