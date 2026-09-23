<?php

return [
    'navigation_group' => 'Часті питання',
    'category' => [
        'label' => 'Категорія FAQ',
        'plural_label' => 'Категорії FAQ',
        'fields' => [
            'name' => 'Назва',
            'slug' => 'Слаг',
            'order' => 'Порядок',
            'is_active' => 'Активний',
        ],
    ],
    'item' => [
        'label' => 'Питання',
        'plural_label' => 'Питання',
        'fields' => [
            'category' => 'Категорія',
            'question' => 'Питання',
            'answer' => 'Відповідь',
            'order' => 'Порядок',
            'is_active' => 'Активний',
        ],
    ],
];
