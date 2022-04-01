<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\UOM;
use Miq\ErpnextApi\Exception\ApiException;

class UOMService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/uom'; }
    protected function getEntity(): string {  return UOM::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param UOM $item
     * @return UOM|null
     * @throws ApiException
     */
    public function add(UOM $item): ?UOM
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), UOM::class, 'json');
    }

    /**
     * @param array $items
     * @return UOM
     * @throws ApiException
     */
    public function addMany(array $items): UOM
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), UOM::class, 'json');
    }
}