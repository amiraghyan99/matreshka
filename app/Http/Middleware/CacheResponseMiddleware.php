<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class CacheResponseMiddleware
{

    private \DateTimeInterface|\DateInterval|int|null $ttl;

    public function handle(Request $request, Closure $next, $ttl = null)
    {
        if (app()->isProduction()) {
            $this->ttl = $ttl ?? now()->addDay();

            if (Cache::has($this->cacheKey($request) && !is_null($this->ttl))) {
                return response(Cache::get($this->cacheKey($request)));
            }
        }

        return $next($request);
    }

    public function terminate(Request $request, Response $response): void
    {
        if (app()->isProduction()){
            if (Cache::has($this->cacheKey($request)) || $this->ttl === null) {
                return;
            }

            Cache::put($this->cacheKey($request), $response->getContent(), $this->ttl);
        }
    }

    private function cacheKey(Request $request): string
    {
        return md5($request->fullUrl() . '-' . auth()->id());
    }
}
