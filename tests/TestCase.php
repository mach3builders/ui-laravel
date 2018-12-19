<?php

namespace Mach3builders\Ui\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            'Mach3builders\Ui\UiServiceProvider'
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Alert' => \Mach3builders\Ui\Facades\Alert::class,
            'Notify' => \Mach3builders\Ui\Facades\Notify::class,
        ];
    }
}
