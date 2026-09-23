<?php

return [
    'navigation_group' => 'FAQ',
    'category' => [
        'label' => 'FAQ-categorie',
        'plural_label' => 'FAQ-categorieën',
        'fields' => [
            'name' => 'Naam',
            'slug' => 'Slug',
            'order' => 'Volgorde',
            'is_active' => 'Actief',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQ\'s',
        'fields' => [
            'category' => 'Categorie',
            'question' => 'Vraag',
            'answer' => 'Antwoord',
            'order' => 'Volgorde',
            'is_active' => 'Actief',
        ],
    ],
];
