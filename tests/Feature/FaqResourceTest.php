<?php

use JeffersonGoncalves\Faq\Models\Faq;
use JeffersonGoncalves\Faq\Models\FaqCategory;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages\CreateFaq;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages\EditFaq;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\Pages\ListFaqs;
use Livewire\Livewire;

beforeEach(function () {
    filament()->setCurrentPanel(filament()->getPanel('admin'));
});

it('can render the faq list page', function () {
    Livewire::test(ListFaqs::class)->assertSuccessful();
});

it('can list faqs in the table', function () {
    $faq = Faq::create([
        'question' => 'How do I reset my password?',
        'answer' => 'Use the "forgot password" link on the login page.',
    ]);

    Livewire::test(ListFaqs::class)
        ->assertCanSeeTableRecords([$faq]);
});

it('can create a faq', function () {
    $category = FaqCategory::create([
        'name' => 'Account',
        'slug' => 'account',
    ]);

    Livewire::test(CreateFaq::class)
        ->fillForm([
            'faq_category_id' => $category->id,
            'question' => 'How do I delete my account?',
            'answer' => 'Contact support to request account deletion.',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Faq::query()->where('faq_category_id', $category->id)->exists())->toBeTrue();
});

it('can edit a faq', function () {
    $faq = Faq::create([
        'question' => 'Do you offer refunds?',
        'answer' => 'Yes, within 30 days of purchase.',
    ]);

    Livewire::test(EditFaq::class, ['record' => $faq->getRouteKey()])
        ->assertSuccessful()
        ->fillForm(['answer' => 'Yes, within 14 days of purchase.'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($faq->refresh()->answer)->toBe('Yes, within 14 days of purchase.');
});
