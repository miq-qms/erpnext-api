<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\WorkOrderItem;
use Miq\ErpnextApi\Exception\ApiException;

class WorkOrderItemService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/workorderitem'; }
    protected function getEntity(): string {  return WorkOrderItem::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param WorkOrderItem $item
     * @return WorkOrderItem|null
     * @throws ApiException
     */
    public function add(WorkOrderItem $item): ?WorkOrderItem
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), WorkOrderItem::class, 'json');
    }

    /**
     * @param array $items
     * @return WorkOrderItem
     * @throws ApiException
     */
    public function addMany(array $items): WorkOrderItem
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), WorkOrderItem::class, 'json');
    }
}