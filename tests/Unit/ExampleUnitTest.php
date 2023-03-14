<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Unit;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\TestCase;
use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;
use Deegital\LaravelTrustupIoPhoneNumber\Services\PhoneNumberService;
use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberFormat;
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


        $this->setPrivateProperty('phonePrefix', '+32', $classMock);
        $this->setPrivateProperty('phoneNumber', '475898602', $classMock);

        $classMock->shouldReceive('getUtil')->once()->andReturn($phoneNumberUtilMock);
        $phoneNumberUtilMock->shouldReceive('parse')->once()->andReturn($phoneNumberMock);
        $classMock->shouldReceive('getFormatedNumber')->once()->andReturn('+32475898602');
        $classMock->shouldReceive('parse')->once()->passthru();


        $this->assertInstanceOf(PhoneNumber::class, $classMock->parse());
    }

    public function test_it_can_format()
    {
        $classMock = $this->mockThis(PhoneNumberService::class);
        $phoneNumberUtilMock = $this->mockThis(PhoneNumberUtil::class);
        $phoneNumberMock = $this->mockThis(PhoneNumber::class);
        $phoneNumberFormatMock = $this->mockThis(PhoneNumberFormat::class);

        $this->setPrivateProperty('phonePrefix', '+32', $classMock);
        $this->setPrivateProperty('phoneNumber', '475898602', $classMock);

        $classMock->shouldReceive('hasPhoneNumber')->once()->andReturn(true);
        $classMock->shouldReceive('getUtil')->once()->andReturn($phoneNumberUtilMock);
        $classMock->shouldReceive('parse')->once()->andReturn($phoneNumberMock);
        $phoneNumberUtilMock->shouldReceive('format')->once()->with($phoneNumberMock, $phoneNumberFormatMock)->andReturn("+322819095412");

        $classMock->shouldReceive('formatNumber')->once()->with($phoneNumberFormatMock)->passthru();

        $this->assertEquals("+322819095412", $classMock->formatNumber($phoneNumberFormatMock));
    }
}
