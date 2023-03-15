<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Feature;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\Models\Client;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\Models\ClientCustom;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class ExampleFeatureTest extends TestCase
{
    public function test_it_can_assert_true()
    {
        $this->assertTrue(true);
    }

    public function test_it_can_format_number_case_belgium()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => '475898602'
        ]);


        $this->assertEquals("+32475898602", $client->getE164Number());
    }

    public function test_it_can_format_number_case_belgium_noprefix()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => '475898602',
            'phone_prefix' => null,
        ]);


        $this->assertEquals("+32475898602", $client->getE164Number());
    }

    public function test_it_can_format_number_case_null()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => null,
            'phone_prefix' => null,
        ]);


        $this->assertEquals(null, $client->getE164Number());
    }

    public function test_it_can_format_number_case_null_with_prefix()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => null,
        ]);


        $this->assertEquals(null, $client->getE164Number());
    }

    public function test_it_can_format_number_case_french()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => '71234567',
            'phone_prefix' => '+33'
        ]);


        $this->assertEquals('+3371234567', $client->getE164Number());
    }

    public function test_it_can_format_number_case_invalid()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => '47589860237823232332',
        ]);


        $this->assertEquals(null, $client->getE164Number());
    }

    public function test_custom_trait()
    {
        /** @var ClientCustom */
        $clientCustom = ClientCustom::factory()->make([
            'tel' => '475898602',
        ]);

        $this->assertEquals('475898602', $clientCustom->getPhoneNumberValue());
    }

    public function test_it_get_number_type()
    {
        /** @var Client */
        $client = Client::factory()->make([
            'phone' => '475898602'
        ]);

        $this->assertEquals(true, $client->hasMobilePhoneNumber());
    }
}
