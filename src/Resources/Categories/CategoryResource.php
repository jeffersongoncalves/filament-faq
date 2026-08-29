<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Categories;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use JeffersonGoncalves\Faq\Models\FaqCategory;
use JeffersonGoncalves\FilamentFaq\FilamentFaqPlugin;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages\CreateCategory;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages\EditCategory;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages\ListCategories;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Schemas\CategoryForm;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Tables\CategoriesTable;
use JeffersonGoncalves\FilamentTranslatable\Resources\Concerns\Translatable;
use Throwable;

class CategoryResource extends Resource
{
    use Translatable;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFolder;

    protected static ?int $navigationSort = 1;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getModel(): string
    {
        return FaqCategory::class;
    }

    public static function getNavigationGroup(): ?string
    {
        try {
            return FilamentFaqPlugin::get()->getNavigationGroup();
        } catch (Throwable) {
            return config('filament-faq.navigation_group', __('filament-faq::faq.navigation_group'));
        }
    }

    public static function getModelLabel(): string
    {
        return __('filament-faq::faq.category.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-faq::faq.category.plural_label');
    }

    public static function form(Schema $schema): Schema
    {
        return CategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategoriesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCategories::route('/'),
            'create' => CreateCategory::route('/create'),
            'edit' => EditCategory::route('/{record}/edit'),
        ];
    }
}
