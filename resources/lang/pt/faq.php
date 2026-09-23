<?php

return [
    'navigation_group' => 'Perguntas frequentes',
    'category' => [
        'label' => 'Categoria de FAQ',
        'plural_label' => 'Categorias de FAQ',
        'fields' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'order' => 'Ordem',
            'is_active' => 'Ativo',
        ],
    ],
    'item' => [
        'label' => 'Pergunta frequente',
        'plural_label' => 'Perguntas frequentes',
        'fields' => [
            'category' => 'Categoria',
            'question' => 'Pergunta',
            'answer' => 'Resposta',
            'order' => 'Ordem',
            'is_active' => 'Ativo',
        ],
    ],
];
