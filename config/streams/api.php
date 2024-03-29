<?php

return [

    /*
     * Determine if the API should be enabled.
     *
     * This is disabled by default because
     * The API is public by default.
     */
    'enabled' => env('STREAMS_API_ENABLED', true),

    /*
     * Specify the API prefix.
     */
    'prefix' => env('STREAMS_API_PREFIX', 'api/streams/'),

    /*
     * Specify the API group middleware.
     *
     * This is designed to match out of the box
     * "app/Providers/RouteServiceProvider.php"
     * and "app/Http/Kernel.php" Laravel files.
     *
     * Changing this value will require
     * adjusting the above files.
     */
    'middleware' => env('STREAMS_API_MIDDLEWARE', 'api'),
];
