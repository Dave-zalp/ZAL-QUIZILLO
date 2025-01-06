<?php

use App\Http\Controllers\coursesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');


  // middleware {'auth' and 'verified'}

  // middleware {'auth' and 'verified'}



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->group(function ()
    {
        Route::get('/active', function () {
            return view('dashboard.index');})->name('exam.active');
            
        Route::get('/preview', [coursesController::class, 'preview'])->name('exam.preview');

    });
});

require __DIR__.'/auth.php';
