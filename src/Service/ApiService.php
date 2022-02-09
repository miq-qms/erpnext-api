<?php

namespace Miq\ErpnextApi\Service;

use Miq\ErpnextApi\Api\ErpnextApi;

class ApiService {

    /**
     * @param string $url
     * @param string $proxy
     * @return ErpnextApi
     */
    public static function init(string $url, string $proxy = ''):ErpnextApi {
        return new ErpnextApi($url, $proxy);
    }

}