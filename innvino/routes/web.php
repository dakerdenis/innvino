<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainPageController::class, 'index']);
Route::get('/menu', [MainPageController::class, 'menu'])->name('wine.menu');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin', function(){
    return 'Admin Page';
})->name('admin');

//Route::middleware('auth')->group(function () {
//    Route::get('/admin', [AuthController::class, 'showAdminPage'])->name('admin');
//});
