<?php
namespace Deegital\LaravelTrustupIoPhoneNumber;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\LaravelTrustupIoPhoneNumberContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class LaravelTrustupIoPhoneNumber extends VersionablePackage implements LaravelTrustupIoPhoneNumberContract
{
    public static function prefix(): string
    {
        return "laravel_trustup_io_phone_number";
    }
}