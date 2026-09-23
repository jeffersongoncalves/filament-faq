<?php

return [
    'navigation_group' => 'よくある質問',
    'category' => [
        'label' => 'FAQ カテゴリ',
        'plural_label' => 'FAQ カテゴリ',
        'fields' => [
            'name' => '名前',
            'slug' => 'スラッグ',
            'order' => '並び順',
            'is_active' => '有効',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQ',
        'fields' => [
            'category' => 'カテゴリ',
            'question' => '質問',
            'answer' => '回答',
            'order' => '並び順',
            'is_active' => '有効',
        ],
    ],
];
