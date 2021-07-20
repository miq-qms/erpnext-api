<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Customer;
use Miq\ErpnextApi\Exception\ApiException;

class CustomerService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/customer'; }
    protected function getEntity(): string {  return Customer::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Customer $item
     * @return Customer|null
     * @throws ApiException
     */
    public function add(Customer $item): ?Customer
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($item, 'json')), Customer::class, 'json');
    }

    /**
     * @param array $items
     * @return Customer
     * @throws ApiException
     */
    public function addMany(array $items): Customer
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($items, 'json')), Customer::class, 'json');
    }
}