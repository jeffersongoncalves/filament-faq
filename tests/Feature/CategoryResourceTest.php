<?php

use JeffersonGoncalves\Faq\Models\FaqCategory;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages\CreateCategory;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages\EditCategory;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\Pages\ListCategories;
use Livewire\Livewire;

beforeEach(function () {
    filament()->setCurrentPanel(filament()->getPanel('admin'));
});

it('can render the category list page', function () {
    Livewire::test(ListCategories::class)->assertSuccessful();
});

it('can list categories in the table', function () {
    $category = FaqCategory::create([
        'name' => 'General',
        'slug' => 'general',
    ]);

    Livewire::test(ListCategories::class)
        ->assertCanSeeTableRecords([$category]);
});

it('can create a category', function () {
    Livewire::test(CreateCategory::class)
        ->fillForm([
            'name' => 'Billing',
            'slug' => 'billing',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(FaqCategory::query()->where('slug', 'billing')->exists())->toBeTrue();
});

it('can edit a category', function () {
    $category = FaqCategory::create([
        'name' => 'Shipping',
        'slug' => 'shipping',
    ]);

    Livewire::test(EditCategory::class, ['record' => $category->getRouteKey()])
        ->assertSuccessful()
        ->fillForm(['name' => 'Shipping & Delivery'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($category->refresh()->name)->toBe('Shipping & Delivery');
});
