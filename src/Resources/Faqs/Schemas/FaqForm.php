<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Faqs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Faq\Models\FaqCategory;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make(__('filament-faq::faq.item.label'))
                    ->schema([
                        Select::make('faq_category_id')
                            ->label(__('filament-faq::faq.item.fields.category'))
                            ->relationship('category', 'id')
                            ->getOptionLabelFromRecordUsing(fn (FaqCategory $record) => $record->name)
                            ->searchable()
                            ->preload()
                            ->nullable()
                            ->columnSpanFull(),
                        TextInput::make('question')
                            ->label(__('filament-faq::faq.item.fields.question'))
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('answer')
                            ->label(__('filament-faq::faq.item.fields.answer'))
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('order')
                            ->label(__('filament-faq::faq.item.fields.order'))
                            ->numeric()
                            ->default(0),
                        Toggle::make('is_active')
                            ->label(__('filament-faq::faq.item.fields.is_active'))
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}
