<?php

return [
    'navigation_group' => 'FAQ',

    'category' => [
        'label' => 'FAQ Category',
        'plural_label' => 'FAQ Categories',
        'fields' => [
            'name' => 'Name',
            'slug' => 'Slug',
            'order' => 'Order',
            'is_active' => 'Active',
        ],
    ],

    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQs',
        'fields' => [
            'category' => 'Category',
            'question' => 'Question',
            'answer' => 'Answer',
            'order' => 'Order',
            'is_active' => 'Active',
        ],
    ],
];
