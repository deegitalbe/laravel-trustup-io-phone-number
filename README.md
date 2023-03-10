# laravel-trustup-io-phone-number

A trustup package to format phone number

## Installation

```shell
composer install deegital/laravel-trustup-io-phone-number
```

## Configure your model with trait

```php
use Deegital\LaravelTrustupIoPhoneNumber\traits\PhoneNumberTrait;

class MyModel extends Model
{
    use PhoneNumberTrait;

    public function getPhoneNumberValue(): string
    {
        return $this->phone;
    }

    public function getCountryValue(): CountryEnum
    {
        return CountryEnum::BELGIUM;
    }
}
```
