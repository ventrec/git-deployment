<?php

namespace gitDeployment;

class Config
{
    private static $config = array();

    public static function set($key, $value)
    {
        self::$config[$key] = $value;
    }

    public static function get($key)
    {
        return self::$config[$key];
    }
}
