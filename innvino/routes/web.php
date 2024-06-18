<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthenticateAdmin;

/***** public routes *****/
Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/menu', [HomepageController::class, 'menu'])->name('wine.menu');

/******* admin routes *******/
Route::get('/admin-panel', [AdminController::class, 'index'])->name('admin-panel');
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::middleware([AuthenticateAdmin::class])->group(function () {
    Route::get('/main', [AdminController::class, 'main'])->name('admin.main');
});
