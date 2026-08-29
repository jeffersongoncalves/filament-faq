<?php

namespace JeffersonGoncalves\FilamentFaq;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentFaqServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-faq';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations();
    }
}
