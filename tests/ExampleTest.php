<?php

namespace Jkque\WhenCase\Tests;

use Orchestra\Testbench\TestCase;
use Jkque\WhenCase\WhenCaseServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [WhenCaseServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
