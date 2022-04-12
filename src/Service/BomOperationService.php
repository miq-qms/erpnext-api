<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\BomOperation;
use Miq\ErpnextApi\Exception\ApiException;

class BomOperationService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/bomoperation'; }
    protected function getEntity(): string {  return BomOperation::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param BomOperation $item
     * @return BomOperation|null
     * @throws ApiException
     */
    public function add(BomOperation $item): ?BomOperation
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), BomOperation::class, 'json');
    }

    /**
     * @param array $items
     * @return BomOperation
     * @throws ApiException
     */
    public function addMany(array $items): BomOperation
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), BomOperation::class, 'json');
    }
}