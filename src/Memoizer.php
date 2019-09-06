<?php

namespace Imanghafoori\NiceMiddlewares;

class Memoizer
{
    static $value = [];

    public function handle($data, $next, $key)
    {
        $key = (string)$key;
        if (array_key_exists($key, self::$value)) {
            return self::$value[$key];
        }

        return self::$value[$key] = $next($data);
    }
}
