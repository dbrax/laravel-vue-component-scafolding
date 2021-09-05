<?php

namespace Epmnzava\VueComponent;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Epmnzava\VueComponent\Skeleton\SkeletonClass
 */
class VueComponentFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vue-component';
    }
}
