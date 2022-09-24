<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LendsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('students', [StudentsController::class, 'main'])->name('students');
    Route::get('table_students', [StudentsController::class, 'table'])->name('students.table');
    Route::post('create_students', [StudentsController::class, 'add'])->name('students.add');

    Route::get('books', [BooksController::class, 'main'])->name('books');

    Route::get('lends', [LendsController::class, 'main'])->name('lends');

    Route::get('test', [StudentsController::class, 'test']);
});

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
