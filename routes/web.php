<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\Admin\AdminControl\AdminController;
use App\Http\Controllers\Admin\Product\AdminProductController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\ProfileController;
>>>>>>> 1f1078471eec581ce5f6eba5e08db3558831f75a
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\admin\Strat\StartPageController;
use App\Http\Controllers\Admin\AdminControl\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...

        Route::get('/', function () {
            return view('index');
        });
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

<<<<<<< HEAD
        Route::resource('/role', RoleController::class)->except(['create', 'edit']);
        Route::resource('/admin', AdminController::class)->except(['create', 'edit']);
=======
Route::resource('/role', RoleController::class)->except(['create', 'edit']);
Route::resource('/admin', AdminController::class)->except(['create', 'edit']);
Route::resource('/product', AdminProductController::class)->except(['create', 'edit']);
<<<<<<< HEAD
>>>>>>> 1f1078471eec581ce5f6eba5e08db3558831f75a
=======
>>>>>>> 1f1078471eec581ce5f6eba5e08db3558831f75a

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        Route::get('/welcome',[StartPageController::class , 'index'])->name('welcome.index');


        require __DIR__ . '/auth.php';
        Route::get('/{page}', AdminHomePageController::class);
    }
);