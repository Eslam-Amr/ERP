<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\App;

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
        Route::get('/{page}', AdminController::class);
    });



