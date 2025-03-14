<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutControler;
use App\Http\Controllers\TeamControler;
use App\Http\Controllers\ServicesControler;


Route::middleware([\App\Http\Middleware\SetLocale::class])->group(function () {
    // Маршрут для смены языка
    Route::get('lang/{locale}', [LanguageController::class, 'changeLanguage'])->name('lang');

    // Главная страница и другие маршруты
    Route::get('/', [PageController::class, 'index'])->name('main.index');
    Route::get('/about', [AboutControler::class, 'index'])->name('main.about');
    Route::get('/team', [TeamControler::class, 'index'])->name('main.team');
    Route::get('/services', [ServicesControler::class, 'index'])->name('main.services');
    Route::get('/home', [PageController::class, 'index'])->name('home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__.'/auth.php';

