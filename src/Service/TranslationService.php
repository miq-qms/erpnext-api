<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Translation;
use Miq\ErpnextApi\Exception\ApiException;

class TranslationService extends AbstractService implements ServiceInterface
{

    protected function getBaseRoute(): string
    {
        return '/translation';
    }

    /**
     * @return array
     * @throws ApiException
     */
    function fetch(): array
    {
        return $this->GET('Miq\ErpnextApi\Entity\Translation[]');
    }

    /**
     * @param Translation $translation
     * @return Translation|null
     * @throws ApiException
     */
    public function add(Translation $translation): ?Translation
    {
        return $this->getSerializer()
                    ->deserialize($this->POST($this->getSerializer()->serialize($translation, 'json')), Translation::class, 'json');
    }

    /**
     * @param array $translations
     * @return Translation
     * @throws ApiException
     */
    public function addMany(array $translations): Translation
    {
        return $this->getSerializer()
            ->deserialize($this->POST($this->getSerializer()->serialize($translations, 'json')), Translation::class, 'json');
    }
}