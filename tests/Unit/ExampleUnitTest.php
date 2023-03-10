<?php
namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Unit;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\TestCase;
use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;

class ExampleUnitTest extends TestCase
{
    public function test_it_can_instanciate_facade()
    {
        $this->assertInstanceOf(
            LaravelTrustupIoPhoneNumberFacade::class,
            $this->app->make(LaravelTrustupIoPhoneNumberFacade::class)
        );
    }
}