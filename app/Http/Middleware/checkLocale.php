<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class checkLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->has('locale')) {
            session(['locale', $request('locale')]);
        } else {
            session(['locale', 'en']);
        }
        App::setLocale(session('locale'));
        return $next($request);
    }
}
