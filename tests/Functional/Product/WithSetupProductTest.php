<?php


namespace App\Tests\Functional\Product;


use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client;

class WithSetupProductTest extends ApiTestCase
{
    private Client $client;

    protected function setUp(): void
    {
        $this->client = $this->createClient();
        $this->client->setDefaultOptions([
            'headers' => [
                'Authorization' => 'apiToken'
            ]
        ]);

        parent::setUp();
    }

}