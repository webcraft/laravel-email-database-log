<?php

namespace ShvetsGroup\LaravelEmailDatabaseLog\Tests;

use ShvetsGroup\LaravelEmailDatabaseLog\LaravelEmailDatabaseLogServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../src/database/migrations');
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelEmailDatabaseLogServiceProvider::class,
        ];
    }
}
