<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make(__('filament-faq::faq.category.label'))
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament-faq::faq.category.fields.name'))
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', str($state)->slug())),
                        TextInput::make('slug')
                            ->label(__('filament-faq::faq.category.fields.slug'))
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        TextInput::make('order')
                            ->label(__('filament-faq::faq.category.fields.order'))
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label(__('filament-faq::faq.category.fields.is_active'))
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
