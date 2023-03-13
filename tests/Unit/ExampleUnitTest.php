<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Unit;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\TestCase;
use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;
use Deegital\LaravelTrustupIoPhoneNumber\Services\PhoneNumberService;
use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberUtil;

class ExampleUnitTest extends TestCase
{
    public function test_it_can_instanciate_facade()
    {
        $this->assertInstanceOf(
            LaravelTrustupIoPhoneNumberFacade::class,
            $this->app->make(LaravelTrustupIoPhoneNumberFacade::class)
        );
    }

    public function test_it_can_parse()
    {
        $classMock = $this->mockThis(PhoneNumberService::class);
        $phoneNumberUtilMock = $this->mockThis(PhoneNumberUtil::class);
        $phoneNumberMock = $this->mockThis(PhoneNumber::class);


        $this->setPrivateProperty('phonePrefix', '32', $classMock);
        $this->setPrivateProperty('phoneNumber', '281.909.5412 x779', $classMock);
        $this->setPrivateProperty('locale', 'BE', $classMock);

        $classMock->shouldReceive('getUtil')->once()->andReturn($phoneNumberUtilMock);
        $phoneNumberUtilMock->shouldReceive('parse')->once()->andReturn($phoneNumberMock);
        $classMock->shouldReceive('parse')->once()->passthru();


        $this->assertInstanceOf(PhoneNumber::class, $classMock->parse());
    }
}
