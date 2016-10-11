<?php

return [
    /*
    |--------------------------------------------------------------------------
    | API Secret Key
    |--------------------------------------------------------------------------
    |
    | The api secret key to access Mailchimp. If you don't know the API key, find it here:
    | "http://kb.mailchimp.com/accounts/management/about-api-keys#Find-or-Generate-Your-API-Key"
    |
     */

    'apikey' => env('MAILCHIMP_API_KEY'),
    'list-id' => env('MAILCHIMP_LIST_ID'),

    // response messages
    'messages' => [
        'success' => 'You are subscribed to our newsletter. Please check your inbox.'
    ]
];
