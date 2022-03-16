<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\ItemGroup;
use Miq\ErpnextApi\Exception\ApiException;

class ItemGroupService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/itemgroup'; }
    protected function getEntity(): string {  return ItemGroup::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param ItemGroup $ItemGroup
     * @return ItemGroup|null
     * @throws ApiException
     */
    public function add(ItemGroup $ItemGroup): ?ItemGroup
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($ItemGroup, 'json')), ItemGroup::class, 'json');
    }

    /**
     * @param array $itemgroups
     * @return ItemGroup
     * @throws ApiException
     */
    public function addMany(array $itemgroups): ItemGroup
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($itemgroups, 'json')), ItemGroup::class, 'json');
    }
}