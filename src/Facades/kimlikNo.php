<?php

namespace yunusasuroglu\KimlikNo\Facades;

use Illuminate\Support\Facades\Facade;

class KimlikNo extends Facade
{
    /**
     * Returns the service name provided for Facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'KimlikNo';
    }
}
