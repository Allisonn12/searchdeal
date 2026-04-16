<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Resolve the correct .env file before the application boots.
// On production, the server should expose APP_ENV=production as a real
// environment variable (Apache SetEnv, Nginx fastcgi_param, or hosting panel).
// This fallback covers deployments where only a .env.production file is present.
$envFile = (($_ENV['APP_ENV'] ?? getenv('APP_ENV')) === 'production')
    ? '.env.production'
    : '.env';

return Application::configure(basePath: dirname(__DIR__))
    ->loadEnvironmentFrom($envFile)
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
