<?php

namespace Baselinker\Adapter\Api\Request;

use Symfony\Contracts\HttpClient\ResponseInterface;

interface OrdersInterface
{
    public function getOrders(array $params): ResponseInterface;
}
