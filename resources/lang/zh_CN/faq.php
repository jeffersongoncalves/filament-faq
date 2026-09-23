<?php

return [
    'navigation_group' => '常见问题',
    'category' => [
        'label' => '常见问题分类',
        'plural_label' => '常见问题分类',
        'fields' => [
            'name' => '名称',
            'slug' => '别名',
            'order' => '排序',
            'is_active' => '启用',
        ],
    ],
    'item' => [
        'label' => '常见问题',
        'plural_label' => '常见问题',
        'fields' => [
            'category' => '分类',
            'question' => '问题',
            'answer' => '答案',
            'order' => '排序',
            'is_active' => '启用',
        ],
    ],
];
