<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session()->has('applocale')==null)
        {
            Session::put('applocale',App::currentLocale());
        }

        if(Session()->has('applocale') and array_key_exists(Session()->get('applocale'),config('languages')))
        {
            App::setLocale(Session()->get('applocale'));
        }else{
            App::setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
