<?php

namespace JeffersonGoncalves\FilamentFaq\Tests;

use BladeUI\Heroicons\BladeHeroiconsServiceProvider;
use BladeUI\Icons\BladeIconsServiceProvider;
use Composer\InstalledVersions;
use Filament\Actions\ActionsServiceProvider;
use Filament\Facades\Filament;
use Filament\FilamentServiceProvider;
use Filament\Forms\FormsServiceProvider;
use Filament\Infolists\InfolistsServiceProvider;
use Filament\Notifications\NotificationsServiceProvider;
use Filament\Support\Livewire\Partials\DataStoreOverride;
use Filament\Support\SupportServiceProvider;
use Filament\Tables\TablesServiceProvider;
use Filament\Widgets\WidgetsServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use JeffersonGoncalves\Faq\FaqServiceProvider;
use JeffersonGoncalves\FilamentFaq\FilamentFaqServiceProvider;
use JeffersonGoncalves\FilamentFaq\Tests\Fixtures\TestPanelProvider;
use JeffersonGoncalves\FilamentFaq\Tests\Fixtures\TestUser;
use JeffersonGoncalves\FilamentTranslatable\FilamentTranslatableServiceProvider;
use Livewire\LivewireServiceProvider;
use Livewire\Mechanisms\DataStore;
use Orchestra\Testbench\TestCase as BaseTestCase;
use RyanChandler\BladeCaptureDirective\BladeCaptureDirectiveServiceProvider;

abstract class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->rebindFilamentDataStore();

        Filament::setCurrentPanel(Filament::getDefaultPanel());

        $this->withoutVite();

        $this->actingAs(TestUser::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]));
    }

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            BladeIconsServiceProvider::class,
            BladeHeroiconsServiceProvider::class,
            BladeCaptureDirectiveServiceProvider::class,
            SupportServiceProvider::class,
            FilamentServiceProvider::class,
            FormsServiceProvider::class,
            TablesServiceProvider::class,
            ActionsServiceProvider::class,
            InfolistsServiceProvider::class,
            NotificationsServiceProvider::class,
            WidgetsServiceProvider::class,
            FilamentTranslatableServiceProvider::class,
            FaqServiceProvider::class,
            FilamentFaqServiceProvider::class,
            TestPanelProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        $app['config']->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
        $app['config']->set('auth.providers.users.model', TestUser::class);
    }

    protected function defineDatabaseMigrations(): void
    {
        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->default('');
            $table->rememberToken();
        });

        $this->loadFaqVendorMigrations([
            'create_faq_categories_table',
            'create_faqs_table',
        ]);
    }

    /**
     * Re-bind Livewire's DataStore as a shared singleton.
     *
     * Filament's SupportServiceProvider binds the DataStore to a transient
     * DataStoreOverride, which loses its WeakMap state between resolutions
     * during a single Livewire test render. Binding it as a shared singleton
     * keeps component state (e.g. the error bag) alive for the whole render.
     */
    protected function rebindFilamentDataStore(): void
    {
        if (! class_exists(DataStoreOverride::class) || ! class_exists(DataStore::class)) {
            return;
        }

        $this->app->singleton(DataStore::class, DataStoreOverride::class);
    }

    /**
     * Copy the vendored `*.php.stub` migrations for `jeffersongoncalves/laravel-faq`
     * into a temp directory, each prefixed with a `%04d_` counter so
     * loadMigrationsFrom's filename sort preserves the foreign-key-safe order
     * supplied by the caller.
     *
     * @param  list<string>  $migrations  ordered migration stub names
     */
    protected function loadFaqVendorMigrations(array $migrations): void
    {
        $tempPath = sys_get_temp_dir().'/filament-faq-vendor-migrations';

        if (is_dir($tempPath)) {
            array_map('unlink', (array) glob($tempPath.'/*.php'));
        } else {
            mkdir($tempPath, 0755, true);
        }

        $base = InstalledVersions::getInstallPath('jeffersongoncalves/laravel-faq');

        if ($base === null) {
            return;
        }

        $migrationsPath = $base.'/database/migrations';

        foreach ($migrations as $index => $name) {
            $stub = $migrationsPath.'/'.$name.'.php.stub';

            if (file_exists($stub)) {
                copy($stub, sprintf('%s/%04d_%s.php', $tempPath, $index, $name));
            }
        }

        $this->loadMigrationsFrom($tempPath);
    }
}
