<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about', [TestController::class, 'about'])->name('about');


Route::get('/contacts', [TestController::class, 'contacts'])->name('contacts');

Route::get('/info', [TestController::class, 'info'])->name('information');

Route::get('/job', [TestController::class, 'job'])->name('job');