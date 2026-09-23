<?php

return [
    'navigation_group' => 'Tez-tez verilən suallar',
    'category' => [
        'label' => 'FAQ kateqoriyası',
        'plural_label' => 'FAQ kateqoriyaları',
        'fields' => [
            'name' => 'Ad',
            'slug' => 'Slug',
            'order' => 'Sıra',
            'is_active' => 'Aktiv',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQ-lar',
        'fields' => [
            'category' => 'Kateqoriya',
            'question' => 'Sual',
            'answer' => 'Cavab',
            'order' => 'Sıra',
            'is_active' => 'Aktiv',
        ],
    ],
];
