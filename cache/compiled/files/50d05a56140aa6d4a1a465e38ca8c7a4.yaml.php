<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/system.yaml',
    'modified' => 1436054138,
    'data' => [
        'absolute_urls' => false,
        'home' => [
            'alias' => '/c'
        ],
        'pages' => [
            'theme' => 'faithgame',
            'markdown_extra' => false,
            'process' => [
                'markdown' => true,
                'twig' => false
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'fileh'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => false,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'errors' => [
            'display' => false,
            'log' => 'true`'
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];
