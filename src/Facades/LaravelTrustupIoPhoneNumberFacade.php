<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Facades;

use Deegital\LaravelTrustupIoPhoneNumber\LaravelTrustupIoPhoneNumber;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class LaravelTrustupIoPhoneNumberFacade extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPhoneNumber::class;
    }
}
