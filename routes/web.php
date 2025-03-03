<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
//passing data to view
Route::get('/about', function () {
     $name = 'montaha';
     $teachers = [
        '1' => 'math',
        '2' => 'english',
        '3' => 'arabic',
    ];

    // ->with('name',$name)
    return view('about', compact('name','teachers'));
});


Route::post('/about', function () {
    $name = $_POST['name'];
    $teachers = [
        '1' => 'math',
        '2' => 'english',
        '3' => 'arabic',
    ];
    return view('about', compact('name', 'teachers'));
});

Route::get('/teachers' , [TeacherController::class,'index']);
Route::post('/create', [TeacherController::class , 'creat']);
Route::post('/delete/{id}',[TeacherController::class, 'destroy']);
Route::post('/edit/{id}', [TeacherController::class, 'edit']);
Route::post('/update',  [TeacherController::class, 'update']);
Route::get('app',function(){
    return view ('layouts.app');
});

// users route
Route::controller(UserController::class)->group(function(){
    Route::get('/users' ,'index');
    Route::post('/createusers', 'creatusers');
    Route::post('/deleteusers/{id}','destroyusers');
    Route::post('/editusers/{id}', 'editusers');
    Route::post('/updateusers', 'updateusers');
});
