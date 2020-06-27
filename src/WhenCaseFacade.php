<?php

namespace Jkque\WhenCase;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jkque\WhenCase\Skeleton\SkeletonClass
 */
class WhenCaseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'when-case';
    }
}
