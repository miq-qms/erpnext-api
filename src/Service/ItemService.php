<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Item;
use Miq\ErpnextApi\Exception\ApiException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
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
        $encoders = [new JsonEncoder()];
        $normalizers = array(new PropertyNormalizer(), new DateTimeNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        return $serializer->deserialize($this->POST($serializer->serialize($item, 'json')), Item::class, 'json');
    }
}