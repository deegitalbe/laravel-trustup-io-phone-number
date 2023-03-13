<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\traits;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\PhoneNumberServiceContract;
use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;
use Deegital\LaravelTrustupIoPhoneNumber\services\PhoneNumberService;

trait PhoneNumberTrait
{
    public function phoneNumberService(): PhoneNumberServiceContract
    {
        /** @var PhoneNumberServiceContract */
        $service = LaravelTrustupIoPhoneNumberFacade::getService();

        $service->setPhoneNumber($this->getPhoneNumberValue())
            ->setPhonePrefix($this->getPhoneNumberPrefixValue())
            ->setLocale(app()->getLocale());

        return $service;
    }

    public function getPhoneNumberValue(): ?string
    {
        return $this->phone;
    }

    public function getPhonePrefixValue(): string
    {
        return $this->phone_prefix;
    }

    public function getNexmoNumber(): ?string
    {
        return $this->phoneNumberService()->getNexmoNumber();
    }

    public function getNationalNumber(): ?string
    {
        return $this->phoneNumberService()->getNationalNumber();
    }

    public function getInternationalNumber(): ?string
    {
        return $this->phoneNumberService()->getInternationalNumber();
    }

    public function getE164Number(): ?string
    {
        return $this->phoneNumberService()->getE164Number();
    }
}
