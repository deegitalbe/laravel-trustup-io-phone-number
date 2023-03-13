<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Providers;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\PhoneNumberServiceContract;
use Deegital\LaravelTrustupIoPhoneNumber\LaravelTrustupIoPhoneNumber;
use Deegital\LaravelTrustupIoPhoneNumber\Services\PhoneNumberService;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupIoPhoneNumberServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPhoneNumber::class;
    }

    protected function addToRegister(): void
    {
        $this->app->bind(PhoneNumberServiceContract::class, PhoneNumberService::class);
    }

    protected function addToBoot(): void
    {
        //
    }
}
