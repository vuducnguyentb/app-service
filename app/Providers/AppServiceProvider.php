<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadMigrationsFrom([
            database_path() . "/migrations/users",
            database_path() . "/migrations/contact",
            database_path() . "/migrations/invoices",
            database_path() . "/migrations/products",
            database_path() . "/migrations/pages",
            database_path() . "/migrations/sliders",
            database_path() . "/migrations/triggers",
            database_path() . "/migrations/settings",
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
