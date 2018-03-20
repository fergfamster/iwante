<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Hashids Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'salt'     => env('HASH_ID_KEY', env('APP_KEY')),
            'length'   => env('HASH_ID_LENGTH', 32),
            'alphabet' => '1234567890abcdefghijklmnopqrstuvwxyz',
        ],

        'alternative' => [
            'salt'     => 'your-salt-string',
            'length'   => 'your-length-integer',
            'alphabet' => 'your-alphabet-string',
        ],

    ],

];