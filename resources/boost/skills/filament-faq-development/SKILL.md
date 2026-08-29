---
name: filament-faq-development
description: Build and work with Filament FAQ features, including the Category/FAQ resources and panel configuration.
---

# Filament FAQ Development

## When to use this skill

Use this skill when:
- Integrating Filament FAQ into a panel
- Customizing the Category or FAQ resources
- Overriding resource classes via config

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\FilamentFaq\FilamentFaqPlugin;

FilamentFaqPlugin::make()
    ->navigationGroup('Support');
```

### Overriding a Resource

```php
// config/filament-faq.php
return [
    'resources' => [
        'category' => \App\Filament\Resources\Faqs\CustomCategoryResource::class,
        'faq' => \JeffersonGoncalves\FilamentFaq\Resources\Faqs\FaqResource::class,
    ],
];
```

## Resources

### CategoryResource

Model: `JeffersonGoncalves\Faq\Models\FaqCategory`. Fields: `name` (translatable), `slug`, `order`, `is_active`.

### FaqResource

Model: `JeffersonGoncalves\Faq\Models\Faq`. Fields: `faq_category_id` (nullable `belongsTo` category), `question` (translatable), `answer` (translatable), `order`, `is_active`.

## Troubleshooting

### Plugin not registered

**Cause**: Plugin not added to PanelProvider.

**Solution**: Add `FilamentFaqPlugin::make()` to the `plugins()` array in your PanelProvider.

### Locale switcher missing on Create/Edit/List pages

**Cause**: `FilamentTranslatablePlugin` not registered in the same panel.

**Solution**: Add `FilamentTranslatablePlugin::make()` alongside `FilamentFaqPlugin::make()` in the panel's `plugins()` array.
