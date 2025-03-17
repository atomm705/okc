<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutControler;
use App\Http\Controllers\TeamControler;
use App\Http\Controllers\ServicesControler;
use App\Http\Controllers\TimetableControler;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\ContactsControler;
use App\Http\Controllers\Make_an_appointmentControler;


Route::middleware([\App\Http\Middleware\SetLocale::class])->group(function () {

    Route::get('lang/{locale}', [LanguageController::class, 'changeLanguage'])->name('lang');

    Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {


        Route::get('/', [PageController::class, 'index'])->name('main.index');
        Route::get('/about', [AboutControler::class, 'index'])->name('main.about');
        Route::get('/team', [TeamControler::class, 'index'])->name('main.team');
        Route::get('/services', [ServicesControler::class, 'index'])->name('main.services');
        Route::get('/departments', [DepartmentsController::class, 'index'])->name('main.departments');
        Route::get('/timetable', [TimetableControler::class, 'index'])->name('main.timetable');
        Route::get('/contacts', [ContactsControler::class, 'index'])->name('main.contacts');
        Route::get('/make_an_appointment', [Make_an_appointmentControler::class, 'index'])->name('main.make_an_appointment');
        Route::get('/home', [PageController::class, 'index'])->name('home');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
    });
});
Route::get('/', function () {
    return redirect('/uk');
});


require __DIR__.'/auth.php';
