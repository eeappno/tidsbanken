<?php

return [
    'baseurl' => env('TIDSBANKEN_BASEURL', 'https://api.tidsbanken.net/'),
    'tb_key' => env('TIDSBANKEN_TB_KEY', false),
    'subscription_key' => env('TIDSBANKEN_SUBSCRIPTION_KEY', false),
    'api_version' => env('TIDSBANKEN_API_VERSION', '3.0'),
];
