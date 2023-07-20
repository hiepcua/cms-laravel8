<?php

use Illuminate\Support\Facades\Route;

Route::get('/unauthorized', function () {
    return view('admin.layouts.unauthorized');
})->name('unauthorized');

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    // Route::get('hehe', function(){
    //     return 'hihihehe';
    // })->name('dashboard')->middleware('admin'); // Test middleware

    Route::get('/', function(){
        return 'hehe';
    });

    Route::get('dashboard', function () {
        return view('admin.layouts.app');
    })->name('dashboard');
});

require __DIR__.'/auth.php';

