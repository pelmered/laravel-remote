<?php

return [

    /*
     * This host will be used if none is specified
     * when executing the `remote` command.
     */
    'default_host' => 'default',

    /*
     * Here you can define deafault for the hosts so you don't need to specify on each of the hosts.
     */
    'defaults' => [
        'port' => env('REMOTE_PORT', 22),

        'user' => env('REMOTE_USER'),
        /*
         * The package will cd to the given path before executing the given command.
         */
        'path' => env('REMOTE_PATH'),

        'tag' => 'tag',
    ],

    /*
     * Here you can define the hosts where the commands should be executed.
     */
    'hosts' => [
        'default' => [
            'host' => env('REMOTE_HOST'),
        ]
    ],
];
