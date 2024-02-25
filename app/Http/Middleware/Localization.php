<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session()->has('localization')){
            app()->setLocale(session()->get('localization'));
        }
        else{
            app()->setLocale(config('app.locale'));

        }
        // URL::defaults(['locale'=>$request->segment(1)]);
        return $next($request);
    }
}
