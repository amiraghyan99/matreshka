<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SetLocalizationMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (session()->has('locale')) app()->setLocale(session('locale'));

        return $next($request);
    }
}
