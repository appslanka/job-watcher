# Simple package for job monitering in filamentphp 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/appslanka/job-watcher.svg?style=flat-square)](https://packagist.org/packages/appslanka/job-watcher)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/appslanka/job-watcher/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/appslanka/job-watcher/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/appslanka/job-watcher/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/appslanka/job-watcher/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/appslanka/job-watcher.svg?style=flat-square)](https://packagist.org/packages/appslanka/job-watcher)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require appslanka/job-watcher
```

You can publish and run the migrations with:

```bash
# Make sure your have installed these commands before use this package
# Laravel 11 and higher
php artisan make:queue-batches-table
php artisan make:notifications-table
 
# Laravel 10
php artisan queue:batches-table
php artisan notifications:table
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="job-watcher-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="job-watcher-config"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Appslanka](https://github.com/appslanka)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
