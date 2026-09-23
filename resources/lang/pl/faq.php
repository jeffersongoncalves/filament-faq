<?php

return [
    'navigation_group' => 'FAQ',
    'category' => [
        'label' => 'Kategoria FAQ',
        'plural_label' => 'Kategorie FAQ',
        'fields' => [
            'name' => 'Nazwa',
            'slug' => 'Slug',
            'order' => 'Kolejność',
            'is_active' => 'Aktywny',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQ',
        'fields' => [
            'category' => 'Kategoria',
            'question' => 'Pytanie',
            'answer' => 'Odpowiedź',
            'order' => 'Kolejność',
            'is_active' => 'Aktywny',
        ],
    ],
];
