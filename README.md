# Slugify
The slugify package convert string in to slugs.

[![GitHub license](https://img.shields.io/github/license/DesignByCode/slugify?style=plastic)](https://github.com/DesignByCode/slugify/blob/main/LICENSE.md)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/designbycode/slugify?style=plastic)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/slugify.svg?style=plastic)](https://packagist.org/packages/designbycode/slugify)
[![PHP Composer](https://github.com/DesignByCode/slugify/actions/workflows/php.yml/badge.svg)](https://github.com/DesignByCode/slugify/actions/workflows/php.yml)
[![Tests](https://github.com/DesignByCode/slugify/actions/workflows/run-tests.yml/badge.svg)](https://github.com/DesignByCode/slugify/actions/workflows/run-tests.yml)
[![Check & fix styling](https://github.com/DesignByCode/slugify/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/DesignByCode/slugify/actions/workflows/php-cs-fixer.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/slugify.svg?style=flat-square)](https://packagist.org/packages/designbycode/slugify)




## Installation

You can install the package via composer:

```bash
composer require designbycode/slugify
```

## Usage

```php
use DesignByCode\Slugify\Slugify;

Slugify::make('Hello World');
// translate to 'hello-wolrd'

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

- [Claude Myburgh](https://github.com/designbycode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
