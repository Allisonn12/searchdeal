<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Karu CRM (Cartrack) Lead Integration
    |--------------------------------------------------------------------------
    | Credentials and endpoint for pushing leads into the Karu CRM system.
    | All sensitive values are driven by environment variables — never
    | hard-code tokens or UIDs in source code.
    */
    'karu_crm' => [
        'endpoint'            => env('KARU_CRM_ENDPOINT', 'https://ctcrm.cartrack.co.za/jsonrpc/crm_hook.php'),
        'token'               => env('KARU_CRM_TOKEN'),
        'instance_uid'        => env('KARU_CRM_INSTANCE_UID'),
        'campaign_uid'        => env('KARU_CRM_CAMPAIGN_UID'),
        'external_system_uid' => env('KARU_CRM_EXTERNAL_SYSTEM_UID', 'SearchADealWWW'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Izigiz Lead API
    |--------------------------------------------------------------------------
    | REST endpoint for the Izigiz tracker lead submission service.
    | Campaign codes (VT0001, VTWU0001, CTK0002) are resolved at runtime by
    | IzigizService::CAMPAIGNS — they are not environment-specific so they
    | live in code, not in .env.
    */
    'izigiz' => [
        'endpoint' => env('IZIGIZ_ENDPOINT', 'https://izigiz.com/api/lead/add'),
    ],

];
