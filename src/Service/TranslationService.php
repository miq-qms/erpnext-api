<?php


namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Entity\Translation;
use Miq\ErpnextApi\Exception\ApiException;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Serializer;

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
        $encoders = [new JsonEncoder()];
        $normalizers = array(new PropertyNormalizer(), new DateTimeNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        return $serializer->deserialize($this->POST($serializer->serialize($translation, 'json')), Translation::class, 'json');
    }
}