<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Faqs;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Faq\Models\Faq;
use JeffersonGoncalves\FilamentFaq\FilamentFaqPlugin;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages\CreateFaq;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages\EditFaq;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages\ListFaqs;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Schemas\FaqForm;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Tables\FaqsTable;
use JeffersonGoncalves\FilamentTranslatable\Resources\Concerns\Translatable;
use Throwable;

class FaqResource extends Resource
{
    use Translatable;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';

    protected static ?int $navigationSort = 2;

    protected static ?string $recordTitleAttribute = 'question';

    public static function getModel(): string
    {
        return Faq::class;
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
        return __('filament-faq::faq.item.label');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament-faq::faq.item.plural_label');
    }

    public static function form(Form $form): Form
    {
        return FaqForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return FaqsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFaqs::route('/'),
            'create' => CreateFaq::route('/create'),
            'edit' => EditFaq::route('/{record}/edit'),
        ];
    }
}
