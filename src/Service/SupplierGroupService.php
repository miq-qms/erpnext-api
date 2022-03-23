<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\SupplierGroup;
use Miq\ErpnextApi\Exception\ApiException;

class SupplierGroupService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/suppliergroup'; }
    protected function getEntity(): string {  return SupplierGroup::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param SupplierGroup $SupplierGroup
     * @return SupplierGroup|null
     * @throws ApiException
     */
    public function add(SupplierGroup $SupplierGroup): ?SupplierGroup
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($SupplierGroup, 'json')), SupplierGroup::class, 'json');
    }

    /**
     * @param array $SupplierGroup
     * @return SupplierGroup
     * @throws ApiException
     */
    public function addMany(array $SupplierGroup): SupplierGroup
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($SupplierGroup, 'json')), SupplierGroup::class, 'json');
    }
}