<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Supplier;
use Miq\ErpnextApi\Exception\ApiException;

class SupplierService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/supplier'; }
    protected function getEntity(): string {  return Supplier::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Supplier $item
     * @return Supplier|null
     * @throws ApiException
     */
    public function add(Supplier $item): ?Supplier
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Supplier::class, 'json');
    }

    /**
     * @param array $items
     * @return Supplier
     * @throws ApiException
     */
    public function addMany(array $items): Supplier
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Supplier::class, 'json');
    }
}