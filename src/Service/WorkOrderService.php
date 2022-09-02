<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\WorkOrder;
use Miq\ErpnextApi\Exception\ApiException;

class WorkOrderService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/workorder'; }
    protected function getEntity(): string {  return WorkOrder::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param WorkOrder $item
     * @return WorkOrder|null
     * @throws ApiException
     */
    public function add(WorkOrder $item): ?WorkOrder
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), WorkOrder::class, 'json');
    }

    /**
     * @param array $items
     * @return WorkOrder
     * @throws ApiException
     */
    public function addMany(array $items): WorkOrder
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), WorkOrder::class, 'json');
    }
}