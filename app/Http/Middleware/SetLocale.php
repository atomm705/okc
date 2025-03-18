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
        $locale = $request->segment(1); // Отримуємо перший сегмент (мову) з URL
        $availableLocales = ['en', 'uk', 'ru']; // Доступні мови

        if (!in_array($locale, $availableLocales)) {
            // Якщо немає мови в URL, робимо редирект на мову за замовчуванням
            $defaultLocale = Session::get('locale', config('app.locale', 'uk'));
            return redirect("/{$defaultLocale}" . $request->getRequestUri());
        }

        // Встановлюємо поточну мову
        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
