<?php

namespace JeffersonGoncalves\FilamentFaq\Resources\Faqs\Tables;

use Filament\Tables\Actions;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->label(__('filament-faq::faq.item.fields.question'))
                    ->searchable()
                    ->limit(60),
                TextColumn::make('category.name')
                    ->label(__('filament-faq::faq.item.fields.category'))
                    ->toggleable(),
                TextColumn::make('order')
                    ->label(__('filament-faq::faq.item.fields.order'))
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label(__('filament-faq::faq.item.fields.is_active'))
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label('Created at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
