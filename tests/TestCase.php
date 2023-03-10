<?php
namespace Deegital\LaravelTrustupIoPhoneNumber\Tests;

use Deegital\LaravelTrustupIoPhoneNumber\LaravelTrustupIoPhoneNumber;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Deegital\LaravelTrustupIoPhoneNumber\Providers\LaravelTrustupIoPhoneNumberServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPhoneNumber::class;
    }

    public function getEnvironmentSetUp($app)
    {
        $this->loadMigrations();
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoPhoneNumberServiceProvider::class
        ];
    }

    protected function loadMigrations()
    {
        foreach($this->getMigrations() as $migration):
            app()->make($migration)->up();
        endforeach;
    }

    /**
     * Define your migrations files here.
     * 
     * @return array<int, string> 
     */
    protected function getMigrations(): array
    {
        return [];
    }
}