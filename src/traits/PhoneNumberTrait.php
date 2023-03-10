<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\traits;

use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\services\PhoneNumberService;

trait PhoneNumberTrait
{
    public function PhoneNumberService(): PhoneNumberService
    {
        /** @var PhoneNumberService */
        $service = app()->make(PhoneNumberService::class);

        $service->setPhoneNumber($this->getPhoneNumberValue());
        $service->setCountry($this->getCountryValue());

        return $service;
    }

    public function getNexmoNumber(): ?string
    {
        return $this->PhoneNumberService()->getNexmoNumber();
    }

    public function getNationalNumber(): ?string
    {
        return $this->PhoneNumberService()->getNationalNumber();
    }

    public function getInternationalNumber(): ?string
    {
        return $this->PhoneNumberService()->getInternationalNumber();
    }

    public function getE164Number(): ?string
    {
        return $this->PhoneNumberService()->getE164Number();
    }
}
