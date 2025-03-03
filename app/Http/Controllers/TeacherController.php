<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = DB::table('edu')->get();
    return view('teachers',compact('teachers'));
    }

    public function creat(){
        $teacher_name = $_POST['name'];
        DB::table('edu')->insert(['name'=> $teacher_name]);
        return redirect()->back();
    }

    public function destroy($id){
        DB::table('edu')->where('id',$id)-> delete();
        return redirect()->back();
    }

    public function edit($id){
        $teacher = DB::table('edu')->where('id',$id)->first();
        $teachers =  DB::table('edu')->get();
        return view('teachers' , compact('teacher', 'teachers'));
    }

    public function update(){
        $id = $_POST['id'];
        DB::table('edu')->where('id','=',$id)->update(['name' => $_POST['name']]);
        return redirect('teachers');
    }
}
