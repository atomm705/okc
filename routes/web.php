<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesControler;
use App\Http\Controllers\AppointmentControler;
use App\Http\Controllers\DoctorsController;


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
        Route::get('/prices/{tab?}', [PageController::class, 'prices'])->name('main.prices');
        Route::get('/prices/x-ray', [PageController::class, 'prices'])->name('prices.x-ray');
        Route::get('/prices/tomography', [PageController::class, 'prices'])->name('prices.tomography');
        Route::get('/prices/mri', [PageController::class, 'prices'])->name('prices.mri');
        Route::get('/prices/lab-tests', [PageController::class, 'prices'])->name('prices.lab-tests');
        Route::get('/prices/ultrasound', [PageController::class, 'prices'])->name('prices.ultrasound');
        Route::get('/prices/pregnancy-care', [PageController::class, 'prices'])->name('prices.pregnancy-care');
        Route::get('/testimonials', [PageController::class, 'testimonials'])->name('main.testimonials');
        Route::get('/telemed', [PageController::class, 'telemed'])->name('main.telemed');
        Route::get('/doctors/about', [DoctorsController::class, 'index'])->name('main.doctors');
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

