<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\FaqResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateFaq extends CreateRecord
{
    use Translatable;

    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
