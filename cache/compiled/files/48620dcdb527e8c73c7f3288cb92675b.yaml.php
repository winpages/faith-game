<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'system/config/system.yaml',
    'modified' => 1434570908,
    'data' => [
        'absolute_urls' => false,
        'timezone' => '',
        'param_sep' => ':',
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'antimatter',
            'order' => [
                'by' => 'default',
                'dir' => 'asc'
            ],
            'list' => [
                'count' => 20
            ],
            'dateformat' => [
                'short' => 'jS M Y',
                'long' => 'F jS \\a\\t g:ia'
            ],
            'publish_dates' => true,
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'events' => [
                'page' => true,
                'twig' => true
            ],
            'markdown' => [
                'extra' => false,
                'auto_line_breaks' => false,
                'auto_url_links' => false,
                'escape_markup' => false,
                'special_chars' => [
                    '>' => 'gt',
                    '<' => 'lt'
                ]
            ],
            'types' => 'txt|xml|html|json|rss|atom',
            'expires' => 0,
            'last_modified' => true,
            'etag' => true
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g',
            'lifetime' => 604800,
            'gzip' => false
        ],
        'twig' => [
            'cache' => true,
            'debug' => false,
            'auto_reload' => true,
            'autoescape' => false,
            'undefined_functions' => true,
            'undefined_filters' => true
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_minify_windows' => false,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true,
            'enable_asset_timestamp' => false,
            'collections' => [
                'jquery' => 'system://assets/jquery/jquery-2.1.3.min.js'
            ]
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ],
        'images' => [
            'default_image_quality' => 85,
            'debug' => false
        ],
        'media' => [
            'enable_media_timestamp' => false,
            'upload_limit' => 0
        ],
        'security' => [
            'default_hash' => '$2y$10$kwsyMVwM8/7j0K/6LHT.g.Fs49xOCTp2b8hh/S5.dPJuJcJB6T.UK'
        ]
    ]
];
