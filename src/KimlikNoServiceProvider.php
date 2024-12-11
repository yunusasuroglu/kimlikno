<?php

namespace yunusasuroglu\KimlikNo;

use Illuminate\Support\ServiceProvider;

class KimlikNoServiceProvider extends ServiceProvider
{
    /**
     * Steps to be taken before installing the package.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->singleton(KimlikNo::class, fn($app) => new KimlikNo());

        $this->app->alias(KimlikNo::class, 'KimlikNo');
    }

    /**
     * Register a package service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('kimlikno', function ($app) {
            return new KimlikNo(); // KimlikNo sınıfını buradan çağırıyoruz
        });
    }

}
