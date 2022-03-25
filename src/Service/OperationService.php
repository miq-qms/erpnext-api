<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Operation;
use Miq\ErpnextApi\Exception\ApiException;

class OperationService extends AbstractService implements ServiceInterface
{
    function getBaseRoute(): string {  return '/operation'; }
    function getEntity(): string {  return Operation::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Operation $item
     * @return Operation|null
     * @throws ApiException
     */
    public function add(Operation $item): ?Operation
    {
        return $this->getSerializer()
            ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Operation::class, 'json');
    }

    /**
     * @param array $items
     * @return Operation
     * @throws ApiException
     */
    public function addMany(array $items): Operation
    {
        return $this->getSerializer()
            ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Operation::class, 'json');
    }
}