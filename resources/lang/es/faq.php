<?php

return [
    'navigation_group' => 'Preguntas frecuentes',
    'category' => [
        'label' => 'Categoría de FAQ',
        'plural_label' => 'Categorías de FAQ',
        'fields' => [
            'name' => 'Nombre',
            'slug' => 'Slug',
            'order' => 'Orden',
            'is_active' => 'Activo',
        ],
    ],
    'item' => [
        'label' => 'Pregunta frecuente',
        'plural_label' => 'Preguntas frecuentes',
        'fields' => [
            'category' => 'Categoría',
            'question' => 'Pregunta',
            'answer' => 'Respuesta',
            'order' => 'Orden',
            'is_active' => 'Activo',
        ],
    ],
];
