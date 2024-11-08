<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.user');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::get('dashboard', function () {
        return 'Dashboard';
    })->name('dashboard');
    
    Route::get('user', function () {
        return 'User';
    })->name('user');
});

