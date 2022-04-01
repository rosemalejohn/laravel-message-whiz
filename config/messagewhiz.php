<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Message Whiz API URL
    |--------------------------------------------------------------------------
    |
    | URL from which API is accessed
    |
    */
    'api_url' => env('MESSAGE_WHIZ_API_URL', 'http://sms.mmdsmart.com/api/3'),

    /*
    |--------------------------------------------------------------------------
    | Message Whiz API Key
    |--------------------------------------------------------------------------
    |
    | To start, MessageWhiz uses API keys to allow access to the API.
    | You can find your API key in your personal MW account page.
    |
    */
    'api_key' => env('MESSAGE_WHIZ_API_KEY'),
];
