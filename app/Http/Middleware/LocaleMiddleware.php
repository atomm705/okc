<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Request;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public static $mainLanguage = 'ua'; //основной язык, который не должен отображаться в URl

    public static $languages = ['ua', 'en'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public static function getLocale()
    {
        $uri = Request::path();

        $segmentsURI = explode('/',$uri);


        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            return $segmentsURI[0];

        } else {
            return  self::$mainLanguage;
        }
    }

    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if($locale) App::setLocale($locale);

        else App::setLocale(self::$mainLanguage);

        return $next($request);
    }
}
