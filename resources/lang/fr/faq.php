<?php

return [
    'navigation_group' => 'FAQ',
    'category' => [
        'label' => 'Catégorie de FAQ',
        'plural_label' => 'Catégories de FAQ',
        'fields' => [
            'name' => 'Nom',
            'slug' => 'Slug',
            'order' => 'Ordre',
            'is_active' => 'Actif',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQ',
        'fields' => [
            'category' => 'Catégorie',
            'question' => 'Question',
            'answer' => 'Réponse',
            'order' => 'Ordre',
            'is_active' => 'Actif',
        ],
    ],
];
