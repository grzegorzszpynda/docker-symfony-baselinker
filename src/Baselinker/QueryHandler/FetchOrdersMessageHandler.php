<?php

namespace Baselinker\QueryHandler;

use Baselinker\Adapter\Baselinker;
use Baselinker\Query\FetchOrdersMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class FetchOrdersMessageHandler
{
    public function __construct(private readonly Baselinker $baselinker)
    {
    }

    public function __invoke(FetchOrdersMessage $message)
    {
        return $this->baselinker->orders()->getOrders($message->params)->toArray();
    }
}
