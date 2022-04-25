<?php

namespace Core\Facades\Routing;

use Core\Facades\Facade;
use Core\Routing\Router as RouterClass;

class Router extends Facade
{
    protected static function getFacadeInstance(): RouterClass
    {
        return RouterClass::getInstance();
    }
}