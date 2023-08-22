<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guests\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\ProjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::prefix('admin')->name('admin.home')->middleware('auth')->group(function () {
    Route::get('/', [ AdminHomeController::class , 'home'])->name('home');

    Route::resource('/projects', ProjectController::class);

});


Route::name('guests.home')->group(function () {
    Route::get('/', [ GuestHomeController::class , 'home'])->name('home');

});
