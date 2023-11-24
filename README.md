# This is my package filament-sortable-field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/eightynine/filament-sortable-field.svg?style=flat-square)](https://packagist.org/packages/eightynine/filament-sortable-field)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/eightynine/filament-sortable-field/run-tests?label=tests)](https://github.com/eightynine/filament-sortable-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/eightynine/filament-sortable-field/Check%20&%20fix%20styling?label=code%20style)](https://github.com/eightynine/filament-sortable-field/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/eightynine/filament-sortable-field.svg?style=flat-square)](https://packagist.org/packages/eightynine/filament-sortable-field)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require eightynine/filament-sortable-field
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-sortable-field-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-sortable-field-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-sortable-field-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament-sortable-field = new EightyNine\SortableField();
echo $filament-sortable-field->echoPhrase('Hello, EightyNine!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Eighty Nine](https://github.com/eighty9nine)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
