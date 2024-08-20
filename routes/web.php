<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::prefix('portfolio')->group(function () {
    Route::get('/home', [PageController::class, 'home'])->name('home');
    Route::get('/', function () {
        return redirect()->route('home');
    });
    
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/skills', [PageController::class, 'skills'])->name('skills');
    Route::get('/works', [PageController::class, 'works'])->name('works');
});
