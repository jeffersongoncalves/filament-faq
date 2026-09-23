<?php

return [
    'navigation_group' => 'FAQ',
    'category' => [
        'label' => 'FAQ-Kategorie',
        'plural_label' => 'FAQ-Kategorien',
        'fields' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'order' => 'Reihenfolge',
            'is_active' => 'Aktiv',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQs',
        'fields' => [
            'category' => 'Kategorie',
            'question' => 'Frage',
            'answer' => 'Antwort',
            'order' => 'Reihenfolge',
            'is_active' => 'Aktiv',
        ],
    ],
];
