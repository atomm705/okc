<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesControler;
use App\Http\Controllers\AppointmentControler;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ServicePagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;




Route::middleware(SetLocale::class)->group(function () {
    Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {
        Route::get('', [PageController::class, 'index'])->name('main.index');
        Route::get('/about', [PageController::class, 'about'])->name('main.about');

        Route::get('/services', [ServicesControler::class, 'index'])->name('main.services');
        Route::get('/departments', [PageController::class, 'departments'])->name('main.departments');
        Route::get('/schedule', [PageController::class, 'timetable'])->name('main.timetable');
        Route::get('/blog', [PageController::class, 'blog'])->name('main.blog');
        Route::get('/contacts', [PageController::class, 'contacts'])->name('main.contacts');
        Route::get('/calendar', [AppointmentControler::class, 'index'])->name('main.appointment');
        Route::get('/testimonials', [PageController::class, 'testimonials'])->name('main.testimonials');
        Route::get('/telemed', [PageController::class, 'telemed'])->name('main.telemed');
        Route::get('oftalmologiya/blepharoplastika', [PageController::class, 'blepharoplastika'])->name('main.blepharoplastika');
        Route::get('/plastichna-khururgiya', [PageController::class, 'plastichnakhururgiya'])->name('main.plastichna-khururgiya');
        Route::get('/esteticheskaya-meditsina/inektsionnaya-terapiyaa', [ServicePagesController::class, 'inektsionnayaterapiya'])->name('services.inektsionnaya-terapiya');
        Route::get('/esteticheskaya-meditsina/plazmoterapiya', [ServicePagesController::class, 'plazmoterapiya'])->name('services.plazmoterapiya');
        Route::get('/esteticheskaya-meditsina/rf-lifting', [ServicePagesController::class, 'rflifting'])->name('services.rf-lifting');
        Route::get('/esteticheskaya-meditsina/lazernaya-epilyatsiya', [ServicePagesController::class, 'lazernayaepilyatsiya'])->name('services.lazernaya-epilyatsiya');

        Route::get('/doctors', [PageController::class, 'team'])->name('main.team');

        Route::get('/doctors/{slug}', function () {
            return view('main.doctor-profile');
        })->name('main.doctor.profile');

        Route::get('/prices', function () {
            return view('main.prices', ['category' => null]);
        })->name('main.prices');

        Route::get('/prices/{category}', function ($category) {
            return view('main.prices', compact('category'));
        })->name('prices.category');
    })->where('locale', 'en|uk|ru');
});

// Тут я прописую маршрути які доступні тільки для адміністратора
Route::middleware(['auth', \App\Http\Middleware\IsAdmin::class])->group(function () {
    Route::get('/admin-pannel/user-management', [AdminController::class, 'user'])->name('admin.user-management'); //сторінка користувачів
});


// Тут прописані маршрути тільки для зареєстрованих користувачів(включно адміністратора)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin-pannel', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin-pannel/doctors', [AdminController::class, 'doctors'])->name('admin.admin-doctors');
    Route::get('/admin-pannel/services', [AdminController::class, 'services'])->name('admin.admin-services');
    Route::get('/admin-pannel/user-profile', [AdminController::class, 'users'])->name('admin.user-profile');
});

Route::get('/admin-pannel/register', [RegisteredUserController::class, 'create'])
    ->middleware(['auth', \App\Http\Middleware\IsAdmin::class])
    ->name('admin.register');

Route::post('/admin-pannel/register', [RegisteredUserController::class, 'store'])
    ->middleware(['auth', \App\Http\Middleware\IsAdmin::class]);


Route::get('/switch-language/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'uk', 'ru'])) {
        abort(400);
    }

    session(['locale' => $locale]);

    $previousUrl = url()->previous();
    $parsedUrl = parse_url($previousUrl, PHP_URL_PATH);

    $newUrl = preg_replace('/\/(en|uk|ru)(\/|$)/', "/{$locale}/", $parsedUrl, 1, $count);

    if ($count === 0) {
        $newUrl = "/{$locale}" . $parsedUrl;
    }

    return redirect($newUrl);
})->name('switch.language');

Route::get('/', function () {
    return redirect('/uk');
});

//Route::middleware(['auth'])->group(function () {
   //Route::get('/dashboard', function () {
      //  return view('dashboard');
   //})->name('dashboard');
//});


//Route::middleware('auth')->group(function () {

   // Route::get('/profile', function () {
   //     return redirect()->route('profile.edit');
  //  });

  // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

  //  Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

  // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

