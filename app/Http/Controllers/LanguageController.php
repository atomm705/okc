<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {

       // if (!in_array($locale, ['en', 'uk', 'ru'])) {
          // abort(400);
       // }
        //Session::put('locale', $locale);
        //session()->save();

        //App::setLocale($locale);

       // return redirect()->back();


        if (!in_array($locale, ['en', 'uk', 'ru'])) {
            abort(400);
        }

        Session::put('locale', $locale);
        session()->save();

        App::setLocale($locale);

        $currentUrl = url()->current();
        \Log::info('Current URL: ' . $currentUrl);  // Логируем текущий URL

        $newUrl = preg_replace('/^\/(en|uk|ru)\//', '/' . $locale . '/', $currentUrl);
        \Log::info('Redirecting to: ' . $newUrl);  // Логируем новый URL

        return redirect()->to($newUrl);

    }





}
