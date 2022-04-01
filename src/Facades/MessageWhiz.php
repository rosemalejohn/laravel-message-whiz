<?php

namespace Rosemalejohn\MessageWhiz\Facades;

use Illuminate\Support\Facades\Facade;

class MessageWhiz extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'messagewhiz';
    }
}
