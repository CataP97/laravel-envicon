<?php

namespace CataP97\Envicon\Tests;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return ['CataP97\Envicon\ServiceProvider'];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Envicon' => 'CataP97\Envicon\Facades\Envicon'
        ];
    }
}
