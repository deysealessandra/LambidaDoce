<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'home')->name('admin.home');
});

Route::get('/cadastrar', [UserController::class, 'create'])
    ->name('user.create');

Route::post( '/cadastrar', [userController::class, 'store'])
    ->name( 'user.store');
