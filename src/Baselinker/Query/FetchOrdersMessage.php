<?php

namespace Baselinker\Query;

readonly class FetchOrdersMessage
{
    public function __construct(public array $params)
    {
    }
}
