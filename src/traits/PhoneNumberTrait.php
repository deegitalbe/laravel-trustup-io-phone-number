<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\traits;

use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;
use Deegital\LaravelTrustupIoPhoneNumber\services\PhoneNumberService;

trait PhoneNumberTrait
{
    public function PhoneNumberService(): PhoneNumberService
    {
        /** @var PhoneNumberService */
        $service = LaravelTrustupIoPhoneNumberFacade::getService();

        $service->setPhoneNumber($this->getPhoneNumberValue());
        $service->setPhoneNumberPrefix($this->getPhoneNumberPrefixValue());
        $service->setCountry();

        return $service;
    }

    public function getPhoneNumberValue(): ?string
    {
        return $this->phone;
    }

    public function getPhoneNumberPrefixValue(): string
    {
        return $this->phone_prefix;
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
