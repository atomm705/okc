<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response; // Додаємо правильний namespace
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);
        $availableLocales = ['en', 'uk', 'ru'];

        if (!in_array($locale, $availableLocales)) {

            $defaultLocale = Session::get('locale', config('app.locale', 'uk'));
            return redirect("/{$defaultLocale}" . $request->getRequestUri());
        }


        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
