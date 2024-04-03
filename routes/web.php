<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [App\Http\Controllers\CrudController::class, 'index'])->middleware('auth');
Route::get('/product/create', [App\Http\Controllers\CrudController::class, 'create']);
Route::post('/product', [App\Http\Controllers\CrudController::class, 'store']);
Route::get('/product/{id}/edit', [App\Http\Controllers\CrudController::class, 'edit']);
Route::put('/update/{id}', [App\Http\Controllers\CrudController::class, 'update']);
Route::delete('/product/{id}', [App\Http\Controllers\CrudController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
