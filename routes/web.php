
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);

// Customer routes
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);

// User routes
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);
