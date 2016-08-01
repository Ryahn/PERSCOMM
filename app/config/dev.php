<?php
return [
    'app' => [
        'url' => 'viking.dev',
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10
        ]
    ],
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'name' => 'vas',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ],
    'auth' => [
        'session' => 'user_id',
        'remember' => 'user_r'
    ],
    'mail' => [
        'smtp_auth' => true,
        'smtp_secure' => '',
        'host' => '',
        'username' => '',
        'password' => '',
        'port' => 587,
        'html' => true
    ],
    'twig' => [
      'debug' => true  
    ],
    'csrf' => [
        'session' => 'csrf_token'
    ]
];