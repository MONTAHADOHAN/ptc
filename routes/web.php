<?php

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

Route::get('/teachers', function () {
    return view('teachers');
});

Route::post('/create', function () {
    $teacher_name = $_POST['name'];
    DB::table('edu')->insert(['name'=> $teacher_name]);
    return view('teachers');
});