<?php

namespace Core;

abstract class Singleton
{
    private static $instance = null;

    public static function getInstance()
    {
        if (!static::$instance)
            static::$instance = new static;

        return static::$instance;
    }


}