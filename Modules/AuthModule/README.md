# Metadent Auth Module Package Installation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/metadent/auth-module.svg?style=flat-square)](https://packagist.org/packages/metadent/auth-module)
[![Total Downloads](https://img.shields.io/packagist/dt/metadent/auth-module.svg?style=flat-square)](https://packagist.org/packages/metadent/auth-module)


This is Metadent's backend's api official authentication module package that is required to kickstart the project's api authentication.

## Installation

You can install the package via composer:

```bash
composer require metadent/auth-module:dev-main
```

### You can publish and run the migrations with:

```php
php artisan migrate
```

### You can publish the config file with:

```php
php artisan vendor:publish --provider="Metadent\AuthModule\AuthModuleServiceProvider"  --tag="config"

```

### This is the contents of the published config file:

```php
return [
];

```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email hassansaava@gmail.com instead of using the issue tracker.

## Credits

-   [MUWONGE HASSAN](https://github.com/mhassan654)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

