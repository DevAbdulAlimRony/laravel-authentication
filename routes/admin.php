<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::middleware(['guset:admin'])->group(function(){
        Route::view('/login', 'back.pages.admin.auth.login')->name('login');
    });
    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home', 'back.pages.admin.home')->name('home');
    });
});