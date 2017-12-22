<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/html/user/config/site.yaml',
    'modified' => 1513535603,
    'data' => [
        'title' => 'Radio Aktywne',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Maksymilian Szczepańczyk',
            'email' => 'maksymilian@paga.gg'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Radio Aktywne - studenckie radio Politechniki Warszawskiej'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
