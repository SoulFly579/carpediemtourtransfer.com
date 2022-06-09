<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class setLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = ["tr","en","ar","ru"];
        if(!in_array($request->language,$lang)){
            return redirect("/en");
        }else{
            App::setLocale($request->language);
        }

        return $next($request);
    }
}
