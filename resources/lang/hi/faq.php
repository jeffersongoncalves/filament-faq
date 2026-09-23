<?php

return [
    'navigation_group' => 'अक्सर पूछे जाने वाले प्रश्न',
    'category' => [
        'label' => 'FAQ श्रेणी',
        'plural_label' => 'FAQ श्रेणियाँ',
        'fields' => [
            'name' => 'नाम',
            'slug' => 'स्लग',
            'order' => 'क्रम',
            'is_active' => 'सक्रिय',
        ],
    ],
    'item' => [
        'label' => 'FAQ',
        'plural_label' => 'FAQs',
        'fields' => [
            'category' => 'श्रेणी',
            'question' => 'प्रश्न',
            'answer' => 'उत्तर',
            'order' => 'क्रम',
            'is_active' => 'सक्रिय',
        ],
    ],
];
