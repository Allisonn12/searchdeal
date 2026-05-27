<?php

namespace App\Providers;

use App\Http\Middleware\CheckCookieConsent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        // Use Bootstrap pagination views to match the admin panel's CSS framework.
        Paginator::useBootstrapFive();

        // Route::middlewareGroup('web', [
        //     CheckCookieConsent::class,
        // ]);
    }
}
