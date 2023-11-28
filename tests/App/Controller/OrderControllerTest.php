<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    public function testRequestWithoutValidApiKeyShouldReturnError(): void
    {
        $client = static::createClient();
        $client->request('GET', '/orders');

        $this->assertResponseIsSuccessful();

        $output = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals('ERROR', $output['status']);
        $this->assertEquals('ERROR_BAD_TOKEN', $output['error_code']);
        $this->assertEquals('Invalid user token', $output['error_message']);
    }
}
