<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/html/user/accounts/admin.yaml',
    'modified' => 1512950997,
    'data' => [
        'email' => 'maksymilian@paga.gg',
        'fullname' => 'Admin',
        'title' => 'Administrator',
        'state' => 'enabled',
        'access' => [
            'admin' => [
                'super' => 'true',
                'login' => 'true',
                'users' => 'true'
            ],
            'site' => [
                'login' => 'true'
            ]
        ],
        'hashed_password' => '$2y$10$MYR28xIfO1feIi3yX7uVrOI3NJVSaXo2FByPwwyxbBalwdac5LCra',
        'reset' => '35ba0cee30fb0b84ad93748846f2d28a::1509183368',
        'language' => 'en',
        'login_attempts' => [
            
        ],
        'twofa_secret' => 'H2UQA5DYPQOJAY3YE3ZWY2QFTGVXOSZF',
        'twofa_enabled' => false
    ]
];
