<?php

namespace App\Tests\Functional\Product;


use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

class ProductTest extends ApiTestCase
{
    // @TODO show Basic Tests
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

    // @TODO show Risky Tests

    // Risky Tests - Useless Tests
    public function testUseless()
    {
        // missing any assertions
    }

    // @TODO show Risky Tests - Unintentionally Covered Code
    /**
     * @covers Product::setTitle
     * @TODO cant bring that test to marked as risky
     */
    public function testUnintentionallyCoveredCode()
    {
        $product = new Product();
        $product->setTitle('foo');

        $cateory = new Category();
        $cateory->setTitle('bar');

        $this->assertEquals('foo', $product->getTitle());
    }

    // Risky Tests - Output During Test Execution
    public function testOutputDuringTestExecution()
    {
        var_dump('foo');

        $this->assertTrue(true);
    }

    // Risky Tests - Test Execution Timeout
    /**
     * @small
     */
    public function testExecutionTimeout()
    {
        sleep(2);

        $this->assertTrue(true);
    }

    // Risky Tests - Global State Manipulation
    /**
     * @backupGlobals enabled
     */
    public function testGlobalStateManipulation()
    {
        $GLOBALS['FOO'] = 'BAZ';

         $this->assertTrue(true);
    }
}