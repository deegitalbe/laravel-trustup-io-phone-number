<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Contracts;


interface HasPhoneNumberContract
{
    public function getPhoneNumberValue(): ?string;

    public function getPhonePrefixValue(): ?string;

    public function getNexmoNumber(): ?string;

    public function getNationalNumber(): ?string;

    public function getInternationalNumber(): ?string;

    public function getE164Number(): ?string;

    public function getNumberType(): ?int;

    public function hasMobilePhoneNumber(): bool;
}
