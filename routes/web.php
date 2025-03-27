<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function () {
    return view('task');
});
Route::get('/user', function () {
    return view('user');
});
Route::resource('users', UserController::class);
Route::resource('tasks', TaskController::class);

