<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base URI
    |--------------------------------------------------------------------------
    | The BASE URI will be different depending on the environment you're
    | using (Sandbox or Production).
    |
    */

    'url' => env('API_VIDEO_URL', 'https://sandbox.api.video'),

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    | Your API Key for api.video
    |
    */

    'key' => env('API_VIDEO_KEY'),

];
