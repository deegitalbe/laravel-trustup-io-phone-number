<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Contracts;

use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use Deegital\LaravelTrustupIoPhoneNumber\Enum\LocaleEnum;

interface PhoneNumberServiceContract

{
    public function setPhoneNumber(string $number): PhoneNumberServiceContract;

    public function setPhonePrefix(string $prefix): PhoneNumberServiceContract;

    public function setLocale(string $locale): PhoneNumberServiceContract;

    public function getPhoneNumber(): string;

    public function getPhonePrefix(): string;

    public function getLocale(): string;

    public function getNexmoNumber(): ?string;

    public function getNationalNumber(): ?string;

    public function getInternationalNumber(): ?string;

    public function getE164Number(): ?string;

    public function isValidNumber(): bool;
}
