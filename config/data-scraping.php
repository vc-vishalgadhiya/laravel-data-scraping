<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data Scraping Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where data scraping will be accessible from.
    | You change this path to anything you like.
    |
    */

    'path' => env('DATA_SCRAPING_PATH', 'data-scraping'),

    /*
    |--------------------------------------------------------------------------
    | Data Scraping Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will be assigned to every Data Scraping route, giving you
    | the chance to add your own middleware to this list or change any of
    | the existing middleware. Or, you can simply stick with this list.
    |
    */

    'middleware' => [
        'web',
    ],
];
