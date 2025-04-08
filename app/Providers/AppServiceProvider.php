<?php

namespace App\Providers;

use App\Http\Middleware\CheckCookieConsent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Route::middlewareGroup('web', [
        //     CheckCookieConsent::class,
        // ]);
    }
}
