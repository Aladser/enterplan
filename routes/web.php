<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

require __DIR__.'/auth.php';
Route::get('/', [ProductController::class, 'index'])->name('main');
Route::resource('/product', ProductController::class);
