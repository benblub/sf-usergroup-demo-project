<?php


namespace App\Tests\Functional\Product;


use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Zenstruck\Foundry\Test\ResetDatabase;

class ResetDatabaseBetweenTestsTest extends ApiTestCase
{
    use ResetDatabase;

    // my tests
}