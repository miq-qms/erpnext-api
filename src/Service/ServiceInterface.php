<?php


namespace Miq\ErpnextApi\Service;


interface ServiceInterface
{
    function fetch(): array;
    function fromJson(string $jsonString): array;
}