# Blade components for the Laravel Framework

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zero-to-prod/blade-components.svg?style=flat-square)](https://packagist.org/packages/zero-to-prod/blade-components)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/zero-to-prod/blade-components/run-tests?label=tests)](https://github.com/zero-to-prod/blade-components/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zero-to-prod/blade-components.svg?style=flat-square)](https://packagist.org/packages/zero-to-prod/blade-components)

## Installation

You can install the package via composer:

```bash
composer require zero-to-prod/blade-components
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
### Notes
Equivalent usage
```html
<x-box hidden/>
<x-box hidden="{{$hidden}}"/>
<x-box hidden="1"/>
<x-box :hidden="true"/>
<x-box :hidden="$hidden"/>
```
### Box
```html
<x-box>Foo</x-box>

<!-- Attributes -->
<x-box hidden/>
<x-box flex/>
```

### Link
```html
<x-link href="www.foo.com">Foo</x-link>

<!-- Attributes -->
<x-link hidden/>
<x-link underline="none"/>
<x-link underline="always"/>
<x-link underline="hover"/>
<!-- Equivalent to  target="_blank"-->
<x-link new/>
<x-link disableAutoTitle/>
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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
