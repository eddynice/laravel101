<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [CrudController::class, 'index'])->middleware('auth');

Route::get('/search', [CrudController::class, 'search'])->name('product.search');


Route::get('/product/create', [CrudController::class, 'create']);
Route::post('/product', [CrudController::class, 'store']);
Route::get('/product/{id}/edit', [CrudController::class, 'edit']);
Route::put('/update/{id}', [CrudController::class, 'update']);
Route::delete('/product/{id}', [CrudController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
