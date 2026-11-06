<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;

Route::get('/',[HomeController::class,'home']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/blog',[BlogController::class,'blog']);