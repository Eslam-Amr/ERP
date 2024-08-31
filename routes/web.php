<?php

use App\Http\Controllers\Admin\AdminControl\AdminController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        Route::get('/', function () {
            return view('index');
        });
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/role', RoleController::class)->except(['create', 'edit']);
Route::resource('/admin', AdminController::class)->except(['create', 'edit']);
Route::resource('/product', AdminProductController::class)->except(['create', 'edit']);

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });


        require __DIR__.'/auth.php';
        Route::get('/{page}', AdminHomePageController::class);
    });


