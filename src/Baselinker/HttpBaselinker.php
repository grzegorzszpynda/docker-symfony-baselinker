<?php

namespace Baselinker;

use Baselinker\Adapter\Api\Request\Orders;
use Baselinker\Adapter\Api\Request\OrdersInterface;
use Baselinker\Adapter\Baselinker;
use Baselinker\Adapter\BaselinkerConfig;

class HttpBaselinker implements Baselinker
{
    public function __construct(private readonly BaselinkerConfig $config)
    {
    }

    public function orders(): OrdersInterface
    {
        return new Orders($this->config);
    }
}
