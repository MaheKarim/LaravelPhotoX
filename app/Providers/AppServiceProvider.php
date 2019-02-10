<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::defaultView('pagination::view');
        Paginator::defaultSimpleView('pagination::view');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
