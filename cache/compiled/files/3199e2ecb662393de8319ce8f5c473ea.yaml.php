<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/html/system/config/streams.yaml',
    'modified' => 1512819308,
    'data' => [
        'schemes' => [
            'image' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://images',
                    1 => 'system://images'
                ]
            ],
            'page' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://pages'
                ]
            ],
            'account' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://accounts'
                ]
            ]
        ]
    ]
];
