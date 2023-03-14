<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Traits\HasPhoneNumber;
use Deegital\LaravelTrustupIoPhoneNumber\Contracts\HasPhoneNumberContract;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\Factories\Models\ClientCustomFactory;

class ClientCustom extends Model implements HasPhoneNumberContract
{
    use HasPhoneNumber, HasFactory;

    protected $fillable = ["tel", "phone_prefix"];


    protected static function newFactory()
    {
        return ClientCustomFactory::new();
    }

    public function getPhoneNumberValue(): string
    {
        return $this->tel;
    }
}
