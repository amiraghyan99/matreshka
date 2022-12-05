<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class CacheResponseMiddleware
{

    private \DateTimeInterface|\DateInterval|int|null $ttl;

    public function handle(Request $request, Closure $next, $ttl = null): Response
    {
        $this->ttl = $ttl ?? now()->addDay();
        if (app()->isLocal()) {
            $this->ttl = null;
        }

        if (Cache::has($this->cacheKey($request))) {
            return response(Cache::get($this->cacheKey($request)));
        }
//
        return $next($request);
    }

    public function terminate(Request $request, Response $response): void
    {
        if (Cache::has($this->cacheKey($request)) || $this->ttl === 0) {
            return;
        }

        Cache::put($this->cacheKey($request), $response->getContent(), $this->ttl);
    }

    private function cacheKey(Request $request): string
    {
        return md5($request->fullUrl() . '-' . auth()->id());
    }
}
