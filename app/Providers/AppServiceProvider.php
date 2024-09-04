<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
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
    public function boot(UrlGenerator $url): void

    {
        if (App::environment('production')) {
            resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');
        }
        //
    }
}
