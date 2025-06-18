<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    'guards' => [
        // Guard untuk user umum
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        // Guard untuk admin
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',



            
        ],

        // Guard tambahan khusus untuk login_user (jika berbeda dengan users)
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    'providers' => [
        // User umum (default)
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        // Admin
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],

        // Tambahan untuk login_user table
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],

        // Password reset untuk loginuser
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens', // bisa beda jika ingin
            'expire' => 60,
            'throttle' => 60,
        ],

    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];