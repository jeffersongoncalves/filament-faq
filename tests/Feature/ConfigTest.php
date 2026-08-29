<?php

it('loads the filament-faq config file', function () {
    expect(config('filament-faq'))->toBeArray();
});

it('has a default navigation group', function () {
    expect(config('filament-faq.navigation_group'))->toBe('FAQ');
});

it('registers both resources in config', function () {
    expect(config('filament-faq.resources'))->toBeArray()
        ->toHaveKeys(['category', 'faq']);
});
