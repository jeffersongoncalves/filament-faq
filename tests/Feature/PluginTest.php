<?php

use JeffersonGoncalves\FilamentFaq\FilamentFaqPlugin;
use JeffersonGoncalves\FilamentFaq\Resources\Categories\CategoryResource;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\FaqResource;

it('has a valid plugin id', function () {
    expect(FilamentFaqPlugin::make()->getId())->toBe('filament-faq');
});

it('resolves to the same instance registered in the panel', function () {
    expect(FilamentFaqPlugin::get())->toBeInstanceOf(FilamentFaqPlugin::class);
});

it('registers both resources in the panel', function () {
    $panel = filament()->getPanel('admin');

    expect($panel->getResources())
        ->toContain(CategoryResource::class)
        ->toContain(FaqResource::class);
});

it('falls back to the default navigation group', function () {
    expect(FilamentFaqPlugin::make()->getNavigationGroup())->toBe('FAQ');
});

it('allows overriding the navigation group fluently', function () {
    expect(FilamentFaqPlugin::make()->navigationGroup('Support')->getNavigationGroup())->toBe('Support');
});
