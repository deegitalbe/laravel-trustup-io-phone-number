<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Traits;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\PhoneNumberServiceContract;
use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;


trait HasPhoneNumber
{
    public function phoneNumberService(): PhoneNumberServiceContract
    {
        /** @var PhoneNumberServiceContract */
        $service = LaravelTrustupIoPhoneNumberFacade::getService();

        $service->setPhoneNumber($this->getPhoneNumberValue())
            ->setPhonePrefix($this->getPhonePrefixValue());

        return $service;
    }

    public function getPhoneNumberValue(): ?string
    {
        return $this->phone;
    }

    public function getPhonePrefixValue(): ?string
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

    public function getNumberType(): ?int
    {
        return $this->phoneNumberService()->getNumberType();
    }

    public function hasMobilePhoneNumber(): bool
    {
        return $this->phoneNumberService()->hasMobilePhoneNumber();
    }
}
