<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SetLocale;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicesControler;
use App\Http\Controllers\AppointmentControler;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\ArticleController;




Route::middleware(SetLocale::class)->group(function () {
    Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {
        Route::get('', [PageController::class, 'index'])->name('main.index');
        Route::get('/about', [PageController::class, 'about'])->name('main.about');

        Route::get('/services', [ServicesControler::class, 'index'])->name('main.services');
        Route::get('/departments', [PageController::class, 'departments'])->name('main.departments');

        //Route::get('/schedule', [PageController::class, 'timetable'])->name('main.timetable');

        //Route::get('/schedule/{department?}', function ($department = null) {
        //      return view('main.timetable', compact('department'));
        // })->name('main.timetable');

        Route::get('/schedule/{department?}', [PageController::class, 'timetable'])->name('main.timetable');

        Route::get('/blog', [PageController::class, 'blog'])->name('main.blog');
        Route::get('/contacts', [PageController::class, 'contacts'])->name('main.contacts');
        Route::get('/calendar', [AppointmentControler::class, 'index'])->name('main.appointment');
        Route::get('/testimonials', [PageController::class, 'testimonials'])->name('main.testimonials');
        Route::get('/telemed', [PageController::class, 'telemed'])->name('main.telemed');
        Route::get('oftalmologiya/blepharoplastika', [PageController::class, 'blepharoplastika'])->name('main.blepharoplastika');
        Route::get('/plastichna-khururgiya', [PageController::class, 'plastichnakhururgiya'])->name('main.plastichna-khururgiya');
        Route::get('/esteticheskaya-meditsina/inektsionnaya-terapiya', [ServicePagesController::class, 'inektsionnayaterapiya'])->name('services.inektsionnaya-terapiya');
        Route::get('/esteticheskaya-meditsina/plazmoterapiya', [ServicePagesController::class, 'plazmoterapiya'])->name('services.plazmoterapiya');
        Route::get('/esteticheskaya-meditsina/rf-lifting', [ServicePagesController::class, 'rflifting'])->name('services.rf-lifting');
        Route::get('/esteticheskaya-meditsina/lazernaya-epilyatsiya', [ServicePagesController::class, 'lazernayaepilyatsiya'])->name('services.lazernaya-epilyatsiya');
        Route::get('/esteticheskaya-meditsina/lazernoe-omolozhenie', [ServicePagesController::class, 'lazernoeomolozhenie'])->name('services.lazernoe-omolozhenie');
        Route::get('/esteticheskaya-meditsina/co2', [ServicePagesController::class, 'co2'])->name('services.co2');
        Route::get('/diagnostika/checkup', [ServicePagesController::class, 'checkup'])->name('services.checkup');
        Route::get('/panoptix', [ServicePagesController::class, 'panoptix'])->name('services.panoptix');
        Route::get('/oklens', [ServicePagesController::class, 'oklens'])->name('services.oklens');
        Route::get('/tests', [ServicePagesController::class, 'tests'])->name('services.tests');
        Route::get('/esteticheskaya-meditsina/liposaktsiya-ta-liposkulpturuvannya-v-dokart', [ServicePagesController::class, 'liposaktsiya'])->name('services.liposaktsiya-ta-liposkulpturuvannya-v-dokart');

        Route::get('/doctors', [DoctorController::class, 'index'])->name('main.team');

        Route::get('/doctors/{slug}', [DoctorController::class, 'show'])->name('doctors.show');

        Route::get('/prices', [PageController::class, 'prices'])->name('main.prices');

        Route::get('/price/{category}', [ServicesControler::class, 'price'])->name('prices.category');

        Route::get('/{category_slug}', [ArticleController::class, 'category_page'])->name('main.category');
        Route::get('/{category_slug}/{slug}', [ArticleController::class, 'page'])->name('main.service');
    })->where('locale', 'en|uk|ru');
});

// Тут я прописую маршрути які доступні тільки для адміністратора
Route::middleware(['auth', \App\Http\Middleware\IsAdmin::class])->group(function () {
    Route::get('/admin-pannel/user-management', [AdminController::class, 'user'])->name('admin.user-management'); //сторінка користувачів
});


// Тут прописані маршрути тільки для зареєстрованих користувачів(включно адміністратора)
Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin-panel'], function() {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');

        Route::get('/doctors', [DoctorController::class, 'doctors'])->name('admin.doctors');

        Route::get('/groups', [ServiceController::class, 'groups'])->name('admin.groups');

        Route::get('/services', [ServiceController::class, 'services'])->name('admin.services');

        Route::get('/division', [DivisionController::class, 'index'])->name('admin.divisions');
        Route::get('/division/create', [DivisionController::class, 'create'])->name('admin.divisions.create');
        Route::post('/division/store', [DivisionController::class, 'store'])->name('admin.divisions.store');
        Route::get('/division/{id}/edit', [DivisionController::class, 'edit'])->name('admin.divisions.edit');
        Route::post('/division/{id}/update', [DivisionController::class, 'update'])->name('admin.divisions.update');
        Route::post('/division/{id}/category_add', [DivisionController::class, 'category_add'])->name('admin.divisions.category_add');
        Route::post('/division/category_del', [DivisionController::class, 'category_del'])->name('admin.divisions.category_del');

        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');

    });
});

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

require __DIR__.'/auth.php';

