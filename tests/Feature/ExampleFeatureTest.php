<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Feature;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\Models\Client;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ExampleFeatureTest extends TestCase
{
    public function test_it_can_assert_true()
    {
        $this->assertTrue(true);
    }

    public function test_it_can_format_number()
    {
        /** @var Client */
        $client = Client::factory()->make();


        $this->assertEquals("+322819095412", $client->getE164Number());
    }
}
