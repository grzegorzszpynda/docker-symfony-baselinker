<?php
declare(strict_types=1);

namespace App\Controller;

use Baselinker\Query\FetchOrdersMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class OrderController extends AbstractController
{
    use HandleTrait;

    public function __construct(private MessageBusInterface $messageBus)
    {
    }

    public function getOrders(Request $request): JsonResponse
    {
        $data = $this->handle(new FetchOrdersMessage($request->query->all()));

        return new JsonResponse($data, 200);
    }
}
