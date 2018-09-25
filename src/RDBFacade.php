<?php

namespace UniFreak\RememberableDB;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Database\DatabaseManager
 * @see \Illuminate\Database\Connection
 */
class RDBFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rdb';
    }
}
