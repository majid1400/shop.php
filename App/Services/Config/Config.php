<?php

namespace App\Services\Config;

class Config
{
    public static function get($config)
    {
        return include CONFIG . $config . '.php';
    }
}