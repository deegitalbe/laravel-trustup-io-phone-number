<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Contracts;

use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;

interface PhoneNumberServiceContract

{

    public function getPhoneNumber(): string;

    public function getCountry(): CountryEnum;

    public function getNexmoNumber(): ?string;

    public function getNationalNumber(): ?string;

    public function getInternationalNumber(): ?string;

    public function getE164Number(): ?string;
}
