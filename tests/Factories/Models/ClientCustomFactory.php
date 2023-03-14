<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Factories\Models;

use Deegital\LaravelTrustupIoPhoneNumber\Tests\Models\ClientCustom;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory as EloquentFactory;

class ClientCustomFactory extends EloquentFactory
{
    protected $model = ClientCustom::class;

    public function definition()
    {
        $faker = FakerFactory::create();

        return [
            "tel" => $this->faker->phoneNumber(),
            "phone_prefix" => "+32"
        ];
    }
}
