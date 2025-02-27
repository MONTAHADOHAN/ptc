<?php

use Illuminate\Support\Facades\Route;

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