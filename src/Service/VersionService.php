<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Version;
use Miq\ErpnextApi\Exception\ApiException;

class VersionService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/version'; }
    protected function getEntity(): string {  return Version::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param Version $version
     * @return Version|null
     * @throws ApiException
     */
    public function add(Version $version): ?Version
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($version, 'json')), Version::class, 'json');
    }

    /**
     * @param array $versions
     * @return Version
     * @throws ApiException
     */
    public function addMany(array $versions): Version
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($versions, 'json')), Version::class, 'json');
    }
}