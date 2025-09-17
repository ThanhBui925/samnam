<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Admin\CategoryController;

//admin
Route::prefix('admin')->group(function () {
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{slug}', [CategoryController::class, 'show']);
    Route::post('/categories', [CategoryController::class, 'store']);
});