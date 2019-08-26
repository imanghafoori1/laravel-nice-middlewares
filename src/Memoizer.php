<?php

namespace Imanghafoori\NiceMiddlewares;

class Memoizer
{
    static $value = [];

    public function handle($data, $next, $key = '')
    {
        if (array_key_exists(self::$value[$key])) {
            return self::$value[$key];
        }

        return self::$value[$key] = $next($data);
    }
}