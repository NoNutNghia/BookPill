<?php

namespace App\Providers;

use App\Service\Repository\CartRepositoryInterface;
use App\Service\Repository\Eloquent\CartRepository;
use App\Service\Repository\Eloquent\GenreRepository;
use App\Service\Repository\Eloquent\ProductRepository;
use App\Service\Repository\Eloquent\UserRepository;
use App\Service\Repository\GenreRepositoryInterface;
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
        $this->app->singleton(GenreRepositoryInterface::class, function () {
            return new GenreRepository();
        });
        $this->app->singleton(CartRepositoryInterface::class, function () {
            return new CartRepository();
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
