<?php

namespace TCKimlik;

use Illuminate\Support\ServiceProvider;

class TCKimlikServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('tckimlik', function () {
            return new TCKimlik();
        });
    }

    public function boot()
    {
        // Publish config or migrations if needed
    }
}
