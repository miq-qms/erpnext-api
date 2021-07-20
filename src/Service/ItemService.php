<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Item;
use Miq\ErpnextApi\Exception\ApiException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
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
        $encoders = [new JsonEncoder()];
        $normalizers = array(new DateTimeNormalizer(), new ObjectNormalizer(null, null, null, new ReflectionExtractor()), new ArrayDenormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        return $serializer->deserialize($this->GET(), 'Miq\ErpnextApi\Entity\Item[]', 'json');
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