<div class="filament-hidden">

![Filament FAQ](https://raw.githubusercontent.com/jeffersongoncalves/filament-faq/1.x/art/jeffersongoncalves-filament-faq.png)

</div>

# Filament FAQ

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-faq.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-faq)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-faq/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-faq/actions?query=workflow%3Atests+branch%3A1.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-faq/pint.yml?branch=1.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-faq/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-faq.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-faq)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-faq.svg?style=flat-square)](LICENSE)

Filament admin UI (CRUD) for [`jeffersongoncalves/laravel-faq`](https://github.com/jeffersongoncalves/laravel-faq) — manage FAQ categories and entries, with translatable question/answer/name fields, inside a [Filament](https://filamentphp.com) panel.

## Compatibility

| Package Version | Filament Version |
|-----------------|-------------------|
| [1.x](https://github.com/jeffersongoncalves/filament-faq/tree/1.x) | 3.x |
| [2.x](https://github.com/jeffersongoncalves/filament-faq/tree/2.x) | 4.x |
| [3.x](https://github.com/jeffersongoncalves/filament-faq/tree/3.x) | 5.x |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-faq:"^1.0"
```

Register the plugin in your panel provider:

```php
use JeffersonGoncalves\FilamentFaq\FilamentFaqPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentFaqPlugin::make(),
        ]);
}
```

The FAQ resources render translatable fields (category `name`, `question`, `answer`), so a [`jeffersongoncalves/filament-translatable`](https://github.com/jeffersongoncalves/filament-translatable) plugin instance must also be registered in the same panel.

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag="filament-faq-config"
```

```php
return [
    'navigation_group' => 'FAQ',

    'resources' => [
        'category' => \JeffersonGoncalves\FilamentFaq\Resources\Categories\CategoryResource::class,
        'faq' => \JeffersonGoncalves\FilamentFaq\Resources\Faqs\FaqResource::class,
    ],
];
```

Or configure fluently:

```php
FilamentFaqPlugin::make()->navigationGroup('Support');
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

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
