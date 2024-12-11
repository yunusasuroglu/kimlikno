<?php

namespace yunusasuroglu\KimlikNo;

use Illuminate\Support\ServiceProvider;

class KimlikNoServiceProvider extends ServiceProvider
{
    /**
     * Paket yüklenmeden önce yapılacak işlemler.
     *
     * @return void
     */
    public function boot(): void
    {
        // Facade kullanımını sağlamak için facade kaydını yapıyoruz.
        $this->app->singleton(KimlikNo::class, fn($app) => new KimlikNo());

        // KimlikNo facade'ini tanımlıyoruz.
        $this->app->alias(KimlikNo::class, 'kimlikno');
    }

    /**
     * Paket servis sağlayıcısını kaydetme.
     *
     * @return void
     */
    public function register(): void
    {
        // Paket için gerekli olan ekleme işlemleri burada yapılabilir.
    }
}
