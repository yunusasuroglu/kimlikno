<?php

namespace yunusasuroglu\KimlikNo\Facades;

use Illuminate\Support\Facades\Facade;

class KimlikNo extends Facade
{
    /**
     * Facade için sağlanan servis adını döndürür.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'kimlikno';
    }
}
