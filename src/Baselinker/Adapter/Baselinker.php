<?php

namespace Baselinker\Adapter;

use Baselinker\Adapter\Api\Request\OrdersInterface;

interface Baselinker
{
    public function orders(): OrdersInterface;
}
