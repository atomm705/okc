<?php

return [

    /*
    |--------------------------------------------------------------------------
    | CORS
    |--------------------------------------------------------------------------
    |
    | Налаштування діють для шляхів нижче. Додай 'sanctum/csrf-cookie',
    | якщо використовуєш SPA з cookie-автентифікацією.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    // Дозволені методи
    'allowed_methods' => ['*'],

    // Дозволені джерела (краще вказати конкретні домени замість '*')
    'allowed_origins' => ['http://okc.local', 'http://site.okc.local'],
    'allowed_origins_patterns' => [],

    // Дозволені заголовки
    'allowed_headers' => ['*'],

    // Які заголовки браузер може «бачити»
    'exposed_headers' => [],

    // Кеш preflight, сек.
    'max_age' => 0,

    // Якщо працюєш з cookies (SPA + Sanctum), став true і НЕ використовуй '*'
    'supports_credentials' => false,
];
