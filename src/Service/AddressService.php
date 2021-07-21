<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Address;
use Miq\ErpnextApi\Exception\ApiException;

class AddressService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/address'; }
    protected function getEntity(): string {  return Address::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Address $address
     * @return Address|null
     * @throws ApiException
     */
    public function add(Address $address): ?Address
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($address, 'json')), Address::class, 'json');
    }

    /**
     * @param array $addresses
     * @return Address
     * @throws ApiException
     */
    public function addMany(array $addresses): Address
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($addresses, 'json')), Address::class, 'json');
    }
}