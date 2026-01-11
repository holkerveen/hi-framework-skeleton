<?php

return [
    'cache' => [
        'directory' => __DIR__ . '/var/cache',
    ],
    'router' => [
        'glob' => __DIR__ . '/src/Controllers/*.php',
    ],
    'view' => [
        'template' => [
            'directory' => __DIR__ . '/templates',
        ]
    ],
    'debug' => true,
];
