<?php
/*
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\FileController;

Route::get('/', [FileController::class, 'login']);

// routes/web.php

use App\Http\Controllers\TestController;

Route::get('/tests', [TestController::class, 'index'])->name('test.index');
Route::get('/tests/create', [TestController::class, 'create'])->name('test.create');
Route::post('/tests', [TestController::class, 'store'])->name('test.store');
