<?php

namespace Deegital\LaravelTrustupIoPhoneNumber\Tests\Unit;

use Deegital\LaravelTrustupIoPhoneNumber\Rules\PhoneNumberValidationRule;
use Deegital\LaravelTrustupIoPhoneNumber\Tests\TestCase;

class ValidationUnitTest extends TestCase
{
    public function test_it_validates_a_valid_phone_number()
    {
        $rule = new PhoneNumberValidationRule();

        $this->assertTrue($rule->passes('phone_number', [
            'prefix' => '+32',
            'phone' => '0123456789',
        ]));
    }

    public function test_it_fails_validation_for_an_invalid_phone_number()
    {
        $rule = new PhoneNumberValidationRule();

        $this->assertFalse($rule->passes('phone_number', [
            'prefix' => '+32',
            'phone' => 'invalid_phone_number',
        ]));
    }
}
