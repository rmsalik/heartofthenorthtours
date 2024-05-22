<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\FlyersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\QuicklinksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UpcomingToursController;
use App\Http\Controllers\GalleryController;

use App\Models\Tours;
use App\Models\Categories;
Route::get('/clear', function () {
    // Artisan::call('optimize:clear');
    Artisan::call('migrate --path=/database/migrations/2024_05_21_121514_add_video_source_to_flyers.php');
    // php artisan migrate --path=/database/migrations/2024_05_17_174145_add_bookeo_link_to_flyers.php
    return "cleared";
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/about-us', [PagesController::class, 'aboutus']);
Route::get('/contact-us', [PagesController::class, 'contactUs']);
Route::get('/newsletter', [PagesController::class, 'newsletter']);
Route::post('/subscribe', [PagesController::class, 'subscribe'])->name('subscribe.form');
Route::post('/contactEmail', [PagesController::class, 'send_contact_us_email'])->name('contact.form');
Route::get('/tours/{type}/', [PagesController::class, 'tours']);
Route::get('/reviews', [PagesController::class, 'reviews']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/cache-clear', function () {
    Artisan::call('optimize:clear');
    return true;
});

        // Admin Routes

Route::group(['prefix' => 'admin'], function () {
    Route::group(['as' => 'admin.'], function () {

        Route::get('/dashboard', function () {
                // return view('dashboard');
          $categories = Categories::all();
          $tours = Tours::all();
          return view('tours.index',compact('tours','categories'));
      })->middleware(['auth', 'verified'])->name('dashboard');
        Route::resource('/users',UserController::class);
        Route::resource('/roles', RoleController::class);
        Route::resource('/tours',ToursController::class)->middleware(['auth', 'verified']);
        Route::resource('/flyers',FlyersController::class)->middleware(['auth', 'verified']);
        Route::resource('/links', QuicklinksController::class)->middleware(['auth', 'verified']);
        Route::resource('/categories', CategoriesController::class)->middleware(['auth', 'verified']);
        Route::resource('/gallery', GalleryController::class)->middleware(['auth', 'verified']);
        

    });
});
// Route::get('/detail', 'FlyersController@detail')->name('flyers.detail');
Route::get('/detail', [FlyersController::class, 'detail'])->name('flyers.detail');

Route::controller(PagesController::class)->group(function () {
    Route::get('/home', 'home');
    Route::post('/savePage', 'add_update_fields');
});



    // Frontend Routes


require __DIR__.'/auth.php';
