<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CopyController;
use App\Http\Controllers\LendingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Users routes

Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);

Route::post('/user', [UserController::class, 'store']);

Route::put('/user/{id}', [UserController::class, 'update']);

Route::delete('/user/{id}', [UserController::class, 'destroy']);


//Books routes
Route::get('/books', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);

Route::post('/book', [BookController::class, 'store']);

Route::put('/book/{id}', [BookController::class, 'update']);

Route::delete('/book/{id}', [BookController::class, 'destroy']);


//Copies routes
Route::get('/copies', [CopyController::class, 'index']);
Route::get('/copy/{id}', [CopyController::class, 'show']);

Route::post('/copy', [CopyController::class, 'store']);

Route::put('/copy/{id}', [CopyController::class, 'update']);

Route::delete('/copy/{id}', [CopyController::class, 'destroy']);


//Lendings routes
Route::get('/lendings', [LendingController::class, 'index']);
Route::get('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'show']);

Route::post('/lending', [LendingController::class, 'store']);

Route::patch('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'update']);

Route::delete('/lending/{user_id}/{copy_id}/{start}', [LendingController::class, 'destroy']);
