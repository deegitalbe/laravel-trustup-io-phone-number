<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Rules;

use Deegital\LaravelTrustupIoPhoneNumber\Facades\LaravelTrustupIoPhoneNumberFacade;
use Illuminate\Contracts\Validation\Rule;

class PhoneNumberValidationRule implements Rule
{
    public function passes($attribute, $phoneNumber)
    {
        $phoneNumberService = LaravelTrustupIoPhoneNumberFacade::getService();
        $phoneNumberService->setPhoneNumber($phoneNumber['phone'])
            ->setPhonePrefix($phoneNumber['prefix']);

        try {
            $phoneNumberService->parse();
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function message()
    {
        return 'The phone number is invalid.';
    }
}
