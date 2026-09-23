<?php

return [
    'navigation_group' => 'الأسئلة الشائعة',
    'category' => [
        'label' => 'فئة الأسئلة الشائعة',
        'plural_label' => 'فئات الأسئلة الشائعة',
        'fields' => [
            'name' => 'الاسم',
            'slug' => 'المعرّف (Slug)',
            'order' => 'الترتيب',
            'is_active' => 'نشط',
        ],
    ],
    'item' => [
        'label' => 'سؤال شائع',
        'plural_label' => 'الأسئلة الشائعة',
        'fields' => [
            'category' => 'الفئة',
            'question' => 'السؤال',
            'answer' => 'الإجابة',
            'order' => 'الترتيب',
            'is_active' => 'نشط',
        ],
    ],
];
