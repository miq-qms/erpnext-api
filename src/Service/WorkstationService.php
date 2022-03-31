<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Workstation;
use Miq\ErpnextApi\Exception\ApiException;

class WorkstationService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/workstation'; }
    protected function getEntity(): string {  return Workstation::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Workstation $item
     * @return Workstation|null
     * @throws ApiException
     */
    public function add(Workstation $item): ?Workstation
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Workstation::class, 'json');
    }

    /**
     * @param array $items
     * @return Workstation
     * @throws ApiException
     */
    public function addMany(array $items): Workstation
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Workstation::class, 'json');
    }
}