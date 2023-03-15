<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Contracts;

use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Enum\LocaleEnum;
use libphonenumber\PhoneNumberType;

interface PhoneNumberServiceContract

{
    public function setPhoneNumber(string $number): PhoneNumberServiceContract;

    public function setPhonePrefix(string $prefix): PhoneNumberServiceContract;

    public function getPhoneNumber(): ?string;

    public function getPhonePrefix(): ?string;

    public function getNexmoNumber(): ?string;

    public function getNationalNumber(): ?string;

    public function getInternationalNumber(): ?string;

    public function getE164Number(): ?string;

    public function getNumberType(): ?int;

    public function hasMobilePhoneNumber(): bool;
}
