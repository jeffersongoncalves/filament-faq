<?php

return [
    'navigation_group' => 'Perguntas Frequentes',

    'category' => [
        'label' => 'Categoria de Perguntas Frequentes',
        'plural_label' => 'Categorias de Perguntas Frequentes',
        'fields' => [
            'name' => 'Nome',
            'slug' => 'Slug',
            'order' => 'Ordem',
            'is_active' => 'Ativo',
        ],
    ],

    'item' => [
        'label' => 'Pergunta Frequente',
        'plural_label' => 'Perguntas Frequentes',
        'fields' => [
            'category' => 'Categoria',
            'question' => 'Pergunta',
            'answer' => 'Resposta',
            'order' => 'Ordem',
            'is_active' => 'Ativo',
        ],
    ],
];
