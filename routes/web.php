<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\JerseyController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', CategoryController::class);
Route::resource('jerseys', JerseyController::class);
Route::resource('transactions', TransactionController::class);
Route::get('/transactions/create', [TransactionController::class, 'create'])
     ->name('transactions.create');

Route::post('/transactions', [TransactionController::class, 'store'])
     ->name('transactions.store');
Route::get('/transactions', [TransactionController::class, 'index'])
     ->name('transactions.index');
