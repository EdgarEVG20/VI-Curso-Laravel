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
    /* Vista de Students */
    Route::get('students', [StudentsController::class, 'main'])->name('students');
    /* Obtener datos de Students y mostrarlos en tabla */
    Route::get('table_students', [StudentsController::class, 'table'])->name('students.table');
    /* Agregar datos de Students */
    Route::post('create_students', [StudentsController::class, 'add'])->name('students.add');
    /* Obtener datos de Students */
    Route::get('get_student', [StudentsController::class, 'get_data'])->name('students.get');
    /* Actualizar datos de Students */
    Route::post('update_students', [StudentsController::class, 'update'])->name('students.update');
    /* Generar pdf de Students */
    Route::get('pdf', [StudentsController::class, 'pdf']);
    /* Enviar correo */
    Route::get('email', [StudentsController::class, 'email']);

    /* Vista de Books */
    Route::get('books', [BooksController::class, 'main'])->name('books');

    /* Vista de Lends */
    Route::get('lends', [LendsController::class, 'main'])->name('lends');

    /* Vista de Test */
    Route::get('test', [StudentsController::class, 'test']);
});

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
