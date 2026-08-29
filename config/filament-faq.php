<?php

use JeffersonGoncalves\FilamentFaq\Resources\Categories\CategoryResource;
use JeffersonGoncalves\FilamentFaq\Resources\Faqs\FaqResource;

return [

    /*
    |--------------------------------------------------------------------------
    | Navigation Group
    |--------------------------------------------------------------------------
    |
    | The navigation group under which the FAQ resources are listed in the
    | Filament panel. Override per-plugin with ->navigationGroup('...').
    |
    */

    'navigation_group' => 'FAQ',

    /*
    |--------------------------------------------------------------------------
    | Resources
    |--------------------------------------------------------------------------
    |
    | The Filament resource classes registered by the plugin. Each entry can be
    | swapped for a custom resource extending the default one.
    |
    */

    'resources' => [
        'category' => CategoryResource::class,
        'faq' => FaqResource::class,
    ],

];
