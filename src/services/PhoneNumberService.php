<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\services;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\PhoneNumberServiceContract;
use libphonenumber\PhoneNumber;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberUtil;

class PhoneNumberService implements PhoneNumberServiceContract
{
    protected string $phoneNumber;
    protected string $phonePrefix;
    protected string $locale;

    //GETTER

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }


    public function getPhonePrefix(): string
    {
        return $this->phonePrefix;
    }

    public function getNexmoNumber(): ?string
    {
        $number = $this->getE164Number();

        return $number ? ltrim($number, '+') : null;
    }

    public function getNationalNumber(): ?string
    {
        return $this->formatNumber(PhoneNumberFormat::NATIONAL);
    }

    public function getInternationalNumber(): ?string
    {
        return $this->formatNumber(PhoneNumberFormat::INTERNATIONAL);
    }

    public function getE164Number(): ?string
    {
        return $this->formatNumber(PhoneNumberFormat::E164);
    }

    public function isValidNumber(): bool
    {
        return true;
    }

    //--------------------------------------------

    // SETTER

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function setPhonePrefix(string $phonePrefix): self
    {
        $this->phonePrefix = $phonePrefix;

        return $this;
    }

    //---------------------------------------------

    // LOGIC

    public function getUtil(): PhoneNumberUtil
    {
        return PhoneNumberUtil::getInstance();
    }

    public function parse(): PhoneNumber
    {
        return $this->getUtil()->parse($this->phonePrefix . $this->phoneNumber, $this->locale);
    }

    public function formatNumber($format): ?string
    {
        try {
            return $this
                ->getUtil()
                ->format(
                    $this->parse(),
                    $format
                );
        } catch (\Exception $e) {
            return null;
        }
    }
}
