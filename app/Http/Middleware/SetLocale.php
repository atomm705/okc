<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //public function handle(Request $request, Closure $next)
    //{

      //  $locale = $request->get('locale', Session::get('locale', config('app.locale')));

        //if (!in_array($locale, ['en', 'uk'])) {
          //  $locale = 'en';
        //}

        //App::setLocale($locale);

        //Session::put('locale', $locale);

        //return $next($request);
    //}

    public function handle(Request $request, Closure $next)
    {
       // $locale = $request->segment(1, Session::get('locale', 'uk'));

       // if (!in_array($locale, ['en', 'uk', 'ru'])) {
       //     $locale = 'uk';
      //  }

       // App::setLocale($locale);
       // Session::put('locale', $locale);

       // return $next($request);

        $locale = $request->segment(1, Session::get('locale', 'uk'));

        if (!in_array($locale, ['en', 'uk', 'ru'])) {
            $locale = 'uk';
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }





}
