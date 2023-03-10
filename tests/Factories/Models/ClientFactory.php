<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Factories\Models;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\Models\Client as ModelsClient;
use Faker\Factory as FakerFactory;
use Henrotaym\LaravelBelgianProvinceFinder\Tests\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory as EloquentFactory;

class ClientFactory extends EloquentFactory
{
    protected $model = ModelsClient::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            "phone" => "281.909.5412 x779",
            "phone_prefix" => "+32"
        ];
    }
}
