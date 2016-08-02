<?php
return [
    'app' => [
        'url' => '',
        'hash' => [
            'algo' => PASSWORD_BCRYPT,
            'cost' => 10
        ]
    ],
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'name' => 'site',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => ''
    ]
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
        'key' => 'csrf_token'
    ]
];
