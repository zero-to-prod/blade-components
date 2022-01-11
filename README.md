# Blade components for the Laravel Framework

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zerotoprod/blade-components.svg?style=flat-square)](https://packagist.org/packages/zerotoprod/blade-components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zerotoprod/blade-components/run-tests?label=tests)](https://github.com/zerotoprod/blade-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/zerotoprod/blade-components/Check%20&%20fix%20styling?label=code%20style)](https://github.com/zerotoprod/blade-components/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zerotoprod/blade-components.svg?style=flat-square)](https://packagist.org/packages/zerotoprod/blade-components)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/blade-components.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/blade-components)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require zerotoprod/blade-components
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="blade-components-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="blade-components-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="blade-components-views"
```

## Usage

```php
$bladeComponents = new ZeroToProd\BladeComponents();
echo $bladeComponents->echoPhrase('Hello, ZeroToProd!');
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

- [D.A.Smith](https://github.com/zero-to-prod)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
