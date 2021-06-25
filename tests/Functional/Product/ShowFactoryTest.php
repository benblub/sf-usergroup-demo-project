<?php


namespace App\Tests\Functional\Product;


use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Tests\Factory\ProductFactory;

class ShowFactoryTest extends ApiTestCase
{
    public function testWithFactories()
    {
        // arrange
        ProductFactory::createOne(['title' => 'Schinken']);

        // act
        // assert
    }

}