# laravel-trustup-io-phone-number

A trustup package to format phone number

## Installation

```shell
composer install deegital/laravel-trustup-io-phone-number
```

## Configure your model with trait

```php
use Deegital\LaravelTrustupIoPhoneNumber\Traits\HasPhoneNumber;
use Deegital\LaravelTrustupIoPhoneNumber\Contracts\HasPhoneNumberContract;

class MyModel extends Model implements HasPhoneNumberContract
{
    use HasPhoneNumber;

    // Your model must have a phone attribute and a phone_prefix attribute
    // Or you can custom like this

    public function getPhoneNumberValue(): ?string
    {
        return $this->custom_phone_attribut_name;
    }

    public function getPhonePrefixValue(): ?string
    {
        return $this->custom_phone_prefix_attribut_name;
    }
}
```
