<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Item;
use Miq\ErpnextApi\Exception\ApiException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

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
        $serializer = $this->getSerializer();

        return $serializer->deserialize($this->POST($serializer->serialize($item, 'json')), Item::class, 'json');
    }

    /**
     * @param array $items
     * @return Item
     * @throws ApiException
     */
    public function addMany(array $items)
    {
        $serializer = $this->getSerializer();

        return $serializer->deserialize($this->POST_MANY($serializer->serialize($items, 'json')), Item::class, 'json');
    }
}