<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\BomItem;
use Miq\ErpnextApi\Exception\ApiException;

class BomItemService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/bomitem'; }
    protected function getEntity(): string {  return BomItem::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param BomItem $item
     * @return BomItem|null
     * @throws ApiException
     */
    public function add(BomItem $item): ?BomItem
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), BomItem::class, 'json');
    }

    /**
     * @param array $items
     * @return BomItem
     * @throws ApiException
     */
    public function addMany(array $items): BomItem
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), BomItem::class, 'json');
    }
}