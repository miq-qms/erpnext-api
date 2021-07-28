<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Bom;
use Miq\ErpnextApi\Exception\ApiException;

class BomService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/bom'; }
    protected function getEntity(): string {  return Bom::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Bom $item
     * @return Bom|null
     * @throws ApiException
     */
    public function add(Bom $item): ?Bom
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Bom::class, 'json');
    }

    /**
     * @param array $items
     * @return Bom
     * @throws ApiException
     */
    public function addMany(array $items): Bom
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Bom::class, 'json');
    }
}