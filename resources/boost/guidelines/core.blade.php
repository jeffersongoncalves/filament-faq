## Filament FAQ

Admin UI (CRUD) for [`jeffersongoncalves/laravel-faq`](https://github.com/jeffersongoncalves/laravel-faq) inside a Filament panel. Adds two resources — FAQ Categories and FAQ entries — with translatable `name`/`question`/`answer` fields (via `jeffersongoncalves/filament-translatable`).

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-faq
</code-snippet>
@endverbatim

### Configuration in the Panel

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\FilamentFaq\FilamentFaqPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FilamentFaqPlugin::make()
                ->navigationGroup('FAQ'),
        ]);
}
</code-snippet>
@endverbatim

### Resources

- **CategoryResource** — manages `JeffersonGoncalves\Faq\Models\FaqCategory` (name, slug, order, active).
- **FaqResource** — manages `JeffersonGoncalves\Faq\Models\Faq` (category, question, answer, order, active).

Both resources honor `filament-faq.resources.*` config overrides, so a custom resource class can be swapped in without republishing the plugin.

### Best Practices

- Requires a `FilamentTranslatablePlugin` registered in the same panel (translatable fields rely on it for locale switching).
- Customize the navigation group globally via `config('filament-faq.navigation_group')` or per-plugin via `->navigationGroup()`.
- Override a single resource via `config('filament-faq.resources.category')` / `.faq` without touching the plugin's `register()` method.
