<?php
namespace Deegital\LaravelTrustupIoPhoneNumber\Providers;

use Deegital\LaravelTrustupIoPhoneNumber\LaravelTrustupIoPhoneNumber;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupIoPhoneNumberServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPhoneNumber::class;
    }

    protected function addToRegister(): void
    {
        //
    }

    protected function addToBoot(): void
    {
        //
    }
}