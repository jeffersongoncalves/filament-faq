<?php

return [
    'navigation_group' => 'FAQ',
    'category' => [
        'label' => 'Categoria FAQ',
        'plural_label' => 'Categorie FAQ',
        'fields' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'order' => 'Ordine',
            'is_active' => 'Attivo',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQ',
        'fields' => [
            'category' => 'Categoria',
            'question' => 'Domanda',
            'answer' => 'Risposta',
            'order' => 'Ordine',
            'is_active' => 'Attivo',
        ],
    ],
];
