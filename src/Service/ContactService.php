<?php

namespace Miq\ErpnextApi\Service;


use Miq\ErpnextApi\Entity\Contact;
use Miq\ErpnextApi\Exception\ApiException;

class ContactService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/contact'; }
    protected function getEntity(): string {  return Contact::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Contact $contact
     * @return Contact|null
     * @throws ApiException
     */
    public function add(Contact $contact): ?Contact
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($contact, 'json')), Contact::class, 'json');
    }

    /**
     * @param array $contacts
     * @return Contact
     * @throws ApiException
     */
    public function addMany(array $contacts): Contact
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($contacts, 'json')), Contact::class, 'json');
    }
}