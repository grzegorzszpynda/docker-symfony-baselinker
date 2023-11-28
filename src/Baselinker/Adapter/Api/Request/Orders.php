<?php

namespace Baselinker\Adapter\Api\Request;

use Baselinker\Adapter\Api\BaselinkerClient;
use Symfony\Contracts\HttpClient\ResponseInterface;

class Orders extends BaselinkerClient implements OrdersInterface
{
    public function getOrders(array $params): ResponseInterface
    {
        return $this->request('getOrders', $params);
    }
}
