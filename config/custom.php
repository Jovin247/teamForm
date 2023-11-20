<?php

return [
    'app' => [
        'owner' => [
            'name' => env('APP_OWNER', 'SOFT FORM'),
            'url' => env('APP_OWNER_URL', '#'),
        ]
    ],

    'forms' => [
        'max_no_user_unclosed_forms' => 10,
    ],
];
