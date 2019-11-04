<?php
/**
 * Created by PhpStorm.
 * User: Xerardoo
 * Date: 11/4/2019
 * Time: 3:59 PM
 */

return [
    'default' => 'mysql',
    'migrations' => 'migrations',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'strict' => false,
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ]
    ]
];