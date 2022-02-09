<?php

namespace Miq\ErpnextApi\Api;

use Miq\ErpnextApi\Exception\ApiException;

class ErpnextApi {
    /**
     * @var string
     */
    private string $url;
    /**
     * @var string
     */
    private string $proxy;
    /**
     * @var array
     */
    private array $customCurlOptions = [];

    /**
     * @param string $url
     * @param string $proxy
     * @return void
     */
    public function __construct(string $url, string $proxy = '') {
        $this->url = $url;
        $this->proxy = $proxy;
    }

    /**
     * Prepares curl request with some default connection data (can be overridden later)
     *
     * @param string $url
     * @return bool
     */
    private function curlInit(string $url): bool
    {
        $ch = curl_init($this->url.'/'.$url);

        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_PROXY, $this->proxy);
        //custom passed options from client
        foreach ($this->getCustomCurlOptions() as $option => $value) {
            if(!empty($option))
                curl_setopt($ch, $option, $value);
        }

        return $ch;
    }

    /**
     * Executes the curl request and handles response or throws an exception
     *
     * @param $resource
     * @return bool|string
     * @throws ApiException
     */
    private function curlExec($resource): bool|string
    {
        $result = curl_exec($resource);
        if(!$result) {
            $code = curl_getinfo($resource, CURLINFO_RESPONSE_CODE);
            throw new ApiException($result, $code);
        }

        return $result;
    }

    /**
     * here u can possibly pass optional options to curl
     * e.g. disable ssl verify in case of letsencrypt
     *
     * @return array
     */
    protected function getCustomCurlOptions(): array {
        return $this->customCurlOptions;
    }

    /**
     * @param array $curlOptions
     * @return ErpnextApi
     */
    public function setCustomCurlOptions(array $curlOptions): ErpnextApi {
        $this->customCurlOptions = $curlOptions;

        return $this;
    }
}