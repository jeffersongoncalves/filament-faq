<?php

return [
    'navigation_group' => 'Koʻp soʻraladigan savollar',
    'category' => [
        'label' => 'FAQ toifasi',
        'plural_label' => 'FAQ toifalari',
        'fields' => [
            'name' => 'Nomi',
            'slug' => 'Slug',
            'order' => 'Tartib',
            'is_active' => 'Faol',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQlar',
        'fields' => [
            'category' => 'Toifa',
            'question' => 'Savol',
            'answer' => 'Javob',
            'order' => 'Tartib',
            'is_active' => 'Faol',
        ],
    ],
];
