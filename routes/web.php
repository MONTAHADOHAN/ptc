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
    $teachers = DB::table('edu')->get();
    return view('teachers',compact('teachers'));
});

Route::post('/create', function () {
    $teacher_name = $_POST['name'];
    DB::table('edu')->insert(['name'=> $teacher_name]);
    return redirect()->back();
});
// delete route
Route::post('/delete/{id}', function ($id) {
   DB::table('edu')->where('id',$id)-> delete();
   return redirect()->back();
});

// edit route
Route::post('/edit/{id}', function ($id) {
    $teacher = DB::table('edu')->where('id',$id)->first();
    $teachers =  DB::table('edu')->get();
    return view('teachers' , compact('teacher', 'teachers'));
 });

// update teacher route
 Route::post('/update', function () {
    $id = $_POST['id'];
    DB::table('edu')->where('id','=',$id)->update(['name' => $_POST['name']]);
    return redirect('teachers');

 });