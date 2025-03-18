<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesControler;
use App\Http\Controllers\AppointmentControler;

// Використовуємо middleware у групі маршрутів
Route::middleware(SetLocale::class)->group(function () {
    Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {
        Route::get('', [PageController::class, 'index'])->name('main.index');
        Route::get('/about', [PageController::class, 'about'])->name('main.about');
        Route::get('/doctors', [PageController::class, 'team'])->name('main.team');
        Route::get('/services', [ServicesControler::class, 'index'])->name('main.services');
        Route::get('/departments', [PageController::class, 'departments'])->name('main.departments');
        Route::get('/schedule', [PageController::class, 'timetable'])->name('main.timetable');
        Route::get('/blog', [PageController::class, 'blog'])->name('main.blog');
        Route::get('/contacts', [PageController::class, 'contacts'])->name('main.contacts');
        Route::get('/calendar', [AppointmentControler::class, 'index'])->name('main.appointment');
        Route::get('/prices', [PageController::class, 'prices'])->name('main.prices');
        Route::get('/testimonials', [PageController::class, 'testimonials'])->name('main.testimonials');
    })->where('locale', 'en|uk|ru');

});

// Перемикання мови та оновлення URL
Route::get('/switch-language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'uk', 'ru'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    $previousUrl = url()->previous();
    $parsedUrl = parse_url($previousUrl, PHP_URL_PATH);

    // Міняємо мітку мови в URL
    $newUrl = preg_replace('/\/(en|uk|ru)(\/|$)/', "/{$locale}/", $parsedUrl, 1, $count);

    if ($count === 0) {
        $newUrl = "/{$locale}" . $parsedUrl;
    }

    return redirect($newUrl);
})->name('switch.language');

Route::get('/', function () {
    return redirect('/uk');
});

