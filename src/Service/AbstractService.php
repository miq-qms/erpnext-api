<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Exception\ApiException;

abstract class AbstractService
{
    /**
     * Returns the base string for api access (e.g. /item or something else)
     *
     * @return string
     */
    abstract protected function getBaseRoute(): string;

    public string $baseUrl = 'http://localhost:8000';

    protected function getBaseUrl(): string {
        return $this->baseUrl;
    }

    /**
     * Prepares curl request with some default connection data (can be overridden later)
     *
     * @param string $url
     * @return false|resource
     */
    private function curlInit(string $url)
    {
        $ch = curl_init($url);

        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        return $ch;
    }

    /**
     * Executes the curl request and handles response or throws an exception
     *
     * @param $resource
     * @return bool|string
     * @throws ApiException
     */
    private function curlExec($resource)
    {
        $result = curl_exec($resource);
        if(!$result) {
            $code = curl_getinfo($resource, CURLINFO_RESPONSE_CODE);
            throw new ApiException($result, $code);
        }

        return $result;
    }

    /**
     * @param string $payload
     * @return bool|string
     * @throws ApiException
     */
    protected function POST(string $payload)
    {
        $ch = $this->curlInit( $this->getBaseUrl().$this->getBaseRoute());
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt( $ch, CURLOPT_POST, true );
        return $this->curlExec($ch);
    }

    /**
     * @return bool|string
     * @throws ApiException
     */
    protected function GET()
    {
        $ch = $this->curlInit( $this->getBaseUrl().$this->getBaseRoute());
        return $this->curlExec($ch);
    }
}