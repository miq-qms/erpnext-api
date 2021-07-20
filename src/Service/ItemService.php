<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Item;
use Miq\ErpnextApi\Exception\ApiException;

class ItemService extends AbstractService implements ServiceInterface
{
    function getBaseRoute(): string {  return '/item'; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET('Miq\ErpnextApi\Entity\Item[]');
    }

    /**
     * @param Item $item
     * @return Item|null
     * @throws ApiException
     */
    public function add(Item $item): ?Item
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Item::class, 'json');
    }

    /**
     * @param array $items
     * @return Item
     * @throws ApiException
     */
    public function addMany(array $items): Item
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Item::class, 'json');
    }
}