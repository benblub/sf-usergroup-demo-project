<?php

namespace App\Tests\Functional\Product;


use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class ProductTest extends ApiTestCase
{
    // show Basic Tests
    public function testCreateProduct()
    {
        // act
        $this->createClient()->request('POST', '/api/products', [
            'json' => [
                'title' => 'Salami'
            ]
        ]);

        // assert
        $this->assertResponseStatusCodeSame(Response::HTTP_CREATED);
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        $this->assertJsonContains([
            'title' => 'Salami'
        ]);
    }
}