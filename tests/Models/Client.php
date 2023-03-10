<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Models;

use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\Factories\Models\ClientFactory;
use Deegital\LaravelTrustupIoPhoneNumber\traits\PhoneNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use PhoneNumberTrait, HasFactory;

    protected $fillable = ["phone", "phone_prefix"];


    protected static function newFactory()
    {
        return ClientFactory::new();
    }

    // public function getPhoneNumberValue(): string
    // {
    //     return $this->phone;
    // }

    // public function getCountryValue(): CountryEnum
    // {
    //     return CountryEnum::BELGIUM;
    // }
}
