<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\IProductRepositary;
use App\Repository\ProductRepositary;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IProductRepositary::class, ProductRepositary::class );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
