<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/html/user/themes/raktywne/blueprints/default.yaml',
    'modified' => 1510432775,
    'data' => [
        'title' => 'Default',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'display_image' => [
                                    'type' => 'file',
                                    'label' => 'Obrazek',
                                    'destination' => 'self@',
                                    'random_name' => true,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'audio_attach_oga' => [
                                    'type' => 'file',
                                    'label' => 'Audio OGG',
                                    'destination' => 'self@',
                                    'random_name' => true,
                                    'accept' => [
                                        0 => 'audio/*',
                                        1 => 'video/*'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
