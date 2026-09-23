<?php

return [
    'navigation_group' => 'Частые вопросы',
    'category' => [
        'label' => 'Категория FAQ',
        'plural_label' => 'Категории FAQ',
        'fields' => [
            'name' => 'Название',
            'slug' => 'Слаг',
            'order' => 'Порядок',
            'is_active' => 'Активен',
        ],
    ],
    'item' => [
        'label' => 'Вопрос',
        'plural_label' => 'Вопросы',
        'fields' => [
            'category' => 'Категория',
            'question' => 'Вопрос',
            'answer' => 'Ответ',
            'order' => 'Порядок',
            'is_active' => 'Активен',
        ],
    ],
];
