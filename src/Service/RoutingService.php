<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Routing;
use Miq\ErpnextApi\Exception\ApiException;

class RoutingService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/routing'; }
    protected function getEntity(): string {  return Routing::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Routing $item
     * @return Routing|null
     * @throws ApiException
     */
    public function add(Routing $item): ?Routing
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Routing::class, 'json');
    }

    /**
     * @param array $items
     * @return Routing
     * @throws ApiException
     */
    public function addMany(array $items): Routing
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Routing::class, 'json');
    }
}