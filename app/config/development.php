<?php

return [
    'app' => [
        'url' => 'http://local.dev',
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
    ],
    'auth' => [
        'session' => 'user_id',
        'remember' => 'user_r'
    ],
    'mail' => [
        'smtp_auth' => true,
        'smtp_secure' => 'tls',
        'host' => 'smtp.gmail.com',
        'username' => 'ryantestapp2016@gmail.com',
        'password' => 'cyber!!112016',
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