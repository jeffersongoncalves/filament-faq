<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Categories\Tables;

use Filament\Actions;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament-faq::faq.category.fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label(__('filament-faq::faq.category.fields.slug'))
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('order')
                    ->label(__('filament-faq::faq.category.fields.order'))
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label(__('filament-faq::faq.category.fields.is_active'))
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->recordActions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->toolbarActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
