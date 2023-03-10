<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\services;

use Deegital\LaravelTrustupIoPhoneNumber\Contracts\PhoneNumberServiceContract;
use Deegital\LaravelTrustupIoPhoneNumber\Enum\CountryEnum;
use libphonenumber\CountryCodeToRegionCodeMap;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\PhoneNumberUtil;

class PhoneNumberService implements PhoneNumberServiceContract
{
    protected $phoneNumber;
    protected $phoneNumberPrefix;
    protected $country;

    //GETTER

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getPhoneNumberPrefix(): string
    {
        return $this->phoneNumberPrefix;
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

    //--------------------------------------------

    // SETTER

    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function setCountry(): self
    {
        $country = CountryCodeToRegionCodeMap::$countryCodeToRegionCodeMap[$this->phoneNumberPrefix][0];

        $this->country = $country;

        return $this;
    }

    public function setPhoneNumberPrefix(string $phoneNumberPrefix): self
    {
        $this->phoneNumberPrefix = $phoneNumberPrefix;

        return $this;
    }

    //---------------------------------------------

    // LOGIC

    public function getUtil()
    {
        return PhoneNumberUtil::getInstance();
    }

    public function parse()
    {
        return $this->getUtil()->parse($this->phoneNumberPrefix . $this->phoneNumber, $this->country);
    }

    public function formatNumber($format)
    {
        try {
            return $this
                ->getUtil()
                ->format(
                    $this->parse($this->phoneNumber, $this->country),
                    $format
                );
        } catch (\Exception $e) {
            return null;
        }
    }
}
