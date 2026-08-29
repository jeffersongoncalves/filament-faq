<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\CategoryResource;
use JeffersonGoncalves\FilamentTranslatable\Actions\LocaleSwitcher;
use JeffersonGoncalves\FilamentTranslatable\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateCategory extends CreateRecord
{
    use Translatable;

    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
