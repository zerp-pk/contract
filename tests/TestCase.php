<?php

namespace Zerp\Contract\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\Contract\Providers\ContractServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [ContractServiceProvider::class];
    }
}
