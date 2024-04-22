<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoryController::class,'index']);
Route::post('/logs', [LogController::class,'newLog']);
