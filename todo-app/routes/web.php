<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TodoController::class, 'index'])
    ->name('home');

Route::post('/todo/store', [TodoController::class, 'store'])
    ->name('todo.store');

Route::get('/todo/edit/{todo}', [TodoController::class, 'edit'])
    ->name('todo.edit');

Route::put('/todo/update/{todo}', [TodoController::class, 'update'])
    ->name('todo.update');

Route::delete('/todo/delete/{todo}', [TodoController::class, 'destroy'])
    ->name('todo.delete');
