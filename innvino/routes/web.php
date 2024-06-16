<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPageController;

Route::get('/', [MainPageController::class, 'index']);