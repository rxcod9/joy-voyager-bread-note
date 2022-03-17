<?php

return [

    /*
     * If enabled for voyager-bread-note package.
     */
    'enabled' => env('VOYAGER_BREAD_NOTE_ENABLED', true),

    /*
     * The config_key for voyager-bread-note package.
     */
    'config_key' => env('VOYAGER_BREAD_NOTE_CONFIG_KEY', 'joy-voyager-bread-note'),

    /*
     * The route_prefix for voyager-bread-note package.
     */
    'route_prefix' => env('VOYAGER_BREAD_NOTE_ROUTE_PREFIX', 'joy-voyager-bread-note'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadNote\\Http\\Controllers',
    ],
];
