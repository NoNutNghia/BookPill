<?php

namespace App\Providers;

use App\Service\Repository\Eloquent\ProductRepository;
use App\Service\Repository\Eloquent\UserRepository;
use App\Service\Repository\ProductRepositoryInterface;
use App\Service\Repository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserRepositoryInterface::class, function () {
            return new UserRepository();
        });
        $this->app->singleton(ProductRepositoryInterface::class, function () {
            return new ProductRepository();
        });
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
