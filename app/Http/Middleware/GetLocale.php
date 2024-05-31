<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;

use Closure;



class GetLocale
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle($request, Closure $next)
    {
        if(session('locale')=='pt'|| session('locale')=='en'|| session('locale')=='es'){
            $locale=session('locale');
            App::setLocale($locale);
        }
        return $next($request);
    }
}
