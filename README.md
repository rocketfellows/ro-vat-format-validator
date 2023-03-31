# Romania vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Romania vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/ro-vat-format-validator
```

## Usage example

Valid Romania vat number:

```php
$validator = new ROVatFormatValidator();
$validator->isValid('RO12');
$validator->isValid('RO123');
$validator->isValid('RO1234');
$validator->isValid('RO12345');
$validator->isValid('RO123456');
$validator->isValid('RO1234567');
$validator->isValid('RO12345678');
$validator->isValid('RO123456789');
$validator->isValid('RO1234567890');
$validator->isValid('12');
$validator->isValid('123');
$validator->isValid('1234');
$validator->isValid('12345');
$validator->isValid('123456');
$validator->isValid('1234567');
$validator->isValid('12345678');
$validator->isValid('123456789');
$validator->isValid('1234567890');
```

Returns:

```shell
true
true
true
true
true
true
true
true
true
true
true
true
true
true
true
true
true
true
```

Invalid Romania vat number:

```php
$validator = new ROVatFormatValidator();
$validator->isValid('RO1');
$validator->isValid('1');
$validator->isValid('RO12345678901');
$validator->isValid('12345678901');
```

```shell
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
