<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    route::match(['get','post'], '/login', [AdminController::class, 'login']);
});
