<?php

namespace Deegital\LaravelTrustupIoPhoneNumber;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\LaravelTrustupIoPhoneNumberContract;
use Deegital\LaravelTrustupIoPhoneNumber\Contracts\PhoneNumberServiceContract;
use Deegital\LaravelTrustupIoPhoneNumber\Services\PhoneNumberService;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class LaravelTrustupIoPhoneNumber extends VersionablePackage implements LaravelTrustupIoPhoneNumberContract
{
    public static function prefix(): string
    {
        return "laravel_trustup_io_phone_number";
    }

    public function getService(): PhoneNumberServiceContract
    {
        return app(PhoneNumberService::class);
    }
}
