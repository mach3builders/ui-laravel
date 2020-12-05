<?php

namespace Mach3Builders\UI\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            'Mach3Builders\UI\UiServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Alert' => \Mach3Builders\UI\Facades\Alert::class,
            'Notify' => \Mach3Builders\UI\Facades\Notify::class,
        ];
    }
}
