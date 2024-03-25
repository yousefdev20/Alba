<?php

return [

    'connections' => [
        'mariadb' => [
            'host' => env('MARIADB_HOST', '127.0.0.1'),
            'port' => env('MARIADB_PORT', '3306'),
            'username' => env('MARIADB_USERNAME', 'root'),
            'password' => env('MARIADB_PASSWORD', 'secret'),
        ],

        'mysql' => [
            'host' => env('MYSQL_HOST', '127.0.0.1'),
            'port' => env('MYSQL_PORT', '3306'),
            'username' => env('MYSQL_USERNAME', 'root'),
            'password' => env('MYSQL_PASSWORD', 'secret'),
        ],
    ]
];