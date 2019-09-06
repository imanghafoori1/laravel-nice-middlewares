<?php

namespace Imanghafoori\NiceMiddlewares;

class CacheMiddleware
{
    public function handle($data, $next, $key, $ttl)
    {
        // 1. This part runs before method call
        if (Cache::has($key)) {
            return Cache::get($key);
        }

        $value = $next($data);  // <--- 2. Runs the actual method

        Cache::put($key, $value, $ttl);  // <-- 3. This part runs after method

        return $value;
    }
}
