<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

Route::middleware(['checkBrowser'])->group(function () {
    Route::get('/', HomeController::class);
    Route::resource('post', PostController::class);
//    Route::get('/limon', function () {
//        //return App\Models\post::all();
//        return App\Models\User::all();
//    });
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
