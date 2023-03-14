<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Models;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\HasPhoneNumberContract;
use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\Factories\Models\ClientFactory;
use Deegital\LaravelTrustupIoPhoneNumber\Traits\HasPhoneNumber;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model implements HasPhoneNumberContract
{
    use HasPhoneNumber, HasFactory;

    protected $fillable = ["phone", "phone_prefix"];


    protected static function newFactory()
    {
        return ClientFactory::new();
    }
}
