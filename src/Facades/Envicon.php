<?php

namespace CataP97\Envicon\Facades;

use Illuminate\Support\Facades\Facade;

class Envicon extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'envicon';
    }
}
