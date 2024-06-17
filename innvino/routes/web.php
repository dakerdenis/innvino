<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;

Route::get('/', [MainPageController::class, 'index']);
Route::get('/menu', [MainPageController::class, 'menu'])->name('wine.menu');