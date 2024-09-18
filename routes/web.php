<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TutorialPageController;
use App\Http\Controllers\WorksPagesController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');
Route::get('/works', [PageController::class, 'works'])->name('works');
Route::get('/mobile', [PageController::class, 'mobile'])->name('mobile');

Route::get('/works/{project_name}', [WorksPagesController::class, 'show'])->name('works.show');