<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// This is needed to use the Schema

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //When we needed to leave the index in the users' Migration

        Schema::defaultStringLength(191);
    
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
