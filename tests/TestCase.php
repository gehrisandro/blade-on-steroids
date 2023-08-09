<?php

declare(strict_types=1);

namespace Tests;

use BladeOnSteroids\BladeOnSteroidsServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            BladeOnSteroidsServiceProvider::class,
        ];
    }
}
