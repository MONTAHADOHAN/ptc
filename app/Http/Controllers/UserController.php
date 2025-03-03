<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
     // راوت خاص بالمستخدمين users

     public function index(){
        $users = DB::table('user')->get();
    return view('users',compact('users'));
    }

    public function creatusers(){
        $user_name = $_POST['name'];
        DB::table('user')->insert(['name'=> $user_name]);
        return redirect()->back();
    }

    public function destroyusers($id){
        DB::table('user')->where('id',$id)-> delete();
        return redirect()->back();
    }

    public function editusers($id){
        $user = DB::table('user')->where('id',$id)->first();
        $users =  DB::table('user')->get();
        return view('users' , compact('user', 'users'));
    }

    public function updateusers(){
        $id = $_POST['id'];
        DB::table('user')->where('id','=',$id)->update(['name' => $_POST['name']]);
        return redirect('users');
    }
}
