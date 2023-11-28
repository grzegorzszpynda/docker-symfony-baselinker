<?php

namespace Baselinker\Adapter\Api;

use Baselinker\Adapter\BaselinkerConfig;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\ResponseInterface;

class BaselinkerClient
{
    public function __construct(private readonly BaselinkerConfig $config)
    {
    }

    public function request(string $method, array $parameters): ResponseInterface
    {
        $httpClient = HttpClient::create();

        return $httpClient->request('POST', $this->config->apiUrl, [
            'headers' => [
                'X-BLToken' => $this->config->apiToken,
            ],
            'body' => [
                'method' => $method,
                'parameters' => json_encode($parameters),
            ],
        ]);
    }
}
