<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Locale;
use Symfony\Component\HttpFoundation\Response;

class InternationalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $defaultLocale = 'en';
        $availableLocales = [ 'en', 'it' ];
        $currentLocale = Locale::acceptFromHttp($request->server('HTTP_ACCEPT_LANGUAGE'));

        $locale = Locale::lookup($availableLocales, $currentLocale, true, $defaultLocale);

        app()->setLocale($locale);
        return $next($request);
    }
}
