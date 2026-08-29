<?php

namespace JeffersonGoncalves\FilamentFaq;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentFaq\Concerns\HasFaqPluginConfig;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\CategoryResource;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\FaqResource;

class FilamentFaqPlugin implements Plugin
{
    use HasFaqPluginConfig;

    public function getId(): string
    {
        return 'filament-faq';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'category' => CategoryResource::class,
            'faq' => FaqResource::class,
        ]));
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
