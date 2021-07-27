<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\File;
use Miq\ErpnextApi\Exception\ApiException;

class FileService extends AbstractService implements ServiceInterface
{
    protected function getBaseRoute(): string {  return '/files'; }
    protected function getEntity(): string {  return File::class; }

    /**
     * @return array
     * @throws ApiException
     */
    public function fetch(): array {
        return $this->GET();
    }

    /**
     * @param File $file
     * @return File|null
     * @throws ApiException
     */
    public function add(File $file): ?File
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($file, 'json')), File::class, 'json');
    }

    /**
     * @param array $files
     * @return File
     * @throws ApiException
     */
    public function addMany(array $files): File
    {
        return $this->getSerializer()
            ->deserialize($this->POST($this->getSerializer()->serialize($files, 'json')), File::class, 'json');
    }
}