<?php

namespace Core\Facades;

abstract class Facade
{
    protected static function getFacadeInstance()
    {
        throw new \Exception('getFacadeInstance method not implemented');
    }

    public static function __callStatic($method, $arguments)
    {
        $instance = static::getFacadeInstance();

        if (!$instance)
            throw new \Exception('Facade instance not found.');

        return $instance->$method(...$arguments);
    }
}