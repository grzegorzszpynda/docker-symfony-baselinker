<?php

namespace Baselinker\Adapter;

readonly class BaselinkerConfig
{
    public function __construct(public string $apiUrl, public string $apiToken)
    {
    }
}
