<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => FindService\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
      'client_id' => env('1453046691465503'),
      'client_secret' => env('168c8de7a0da68a6ef9bb7246bd1ecdd'),
      'redirect' => env('https://www.facebook.com/v3.2/dialog/oauth?'),
    ],

    'google' => [
      'client_id' => '741019014414-uvebklkig3suit79elpe6grgdcsbetrf.apps.googleusercontent.com',         // Your GitHub Client ID
      'client_secret' => 'Pr51YYeN9dg1cuctmtcL7tSb', // Your GitHub Client Secret
      'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    

];
