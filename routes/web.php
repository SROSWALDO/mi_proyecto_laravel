<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{user_id}', [UserController::class, 'index']);
Route::resource('tasks', TaskController::class);
